<html>
    <head>
        <meta charset="UTF-8">
        <title>Commander</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylshee" type="text/css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    </head>
    <body style="background-image:url('img/Fond_default.jpg');background-size:100vw ;">
        <?php require_once 'topMenu.php'; ?>
        <section id="container" class="col-md-6 col-md-offset-3" style="background-color:rgba(255,255,255,0.8);">
            <h2>Commander un service:</h2>
            <form action="index.php?action=resumeCommande" method="post">
                <label for="profession">Séléctionnez un métier:</label>
                <select id="profession" name="profession" class="form-control">
                    <?php
                        foreach($professions as $profession){
                            echo '<option value='.$profession['idprof'].'>'.$profession['libelle'].'</option>';
                        }
                    ?>
                </select>
                
                <div id="containerService" >
                    
                </div>
                <div id="proDispo">
                    
                </div>
                <div id="containerCard">
                    
                </div>
                <button type="submit" id="submitCommand"class="btn btn-primary col-md-6 col-md-offset-3 btn-margin">Commander</button>
            </form>
        </section>
        <?php require_once 'modalCarte.php';?>
        <script type="text/javascript">
            $(document).ready(function(){
                getService(1);
                getPro('Paris',1);
                getCard();
                
            });
            
            $('#profession').change(function(){
                var id = $(this).val();
                getService(id);
            });
            $('#containerService').on('change','#service',function(){
                getCard();
                getPro('Paris',$('#profession').val());
            });
            function getCard(){
                $.post(
                    'ajaxCall/AJAx_getCard.php',
                    {},
                    function(data){
                        
                       var result = JSON.parse(data);
                       
                        if(result.length>0){
                            var code = '<label for="carte">Selectionnez une carte</label>'
                                    +'<select id="carte" name="carte" class="form-control">';
                            for(var i =0;i<result.length;i++){
                                if(i==0){
                                    code+='<option value="'+result[i].idcarte+'" selected>'+result[i].numcarte.replace(new RegExp('[0-9]{12}','g'),'************')+'</option>';
                                }
                                else{
                                    code+='<option value="'+result[i].idcarte+'">'+result[i].numcarte.replace(new RegExp('[0-9]{12}','g'),'************')+'</option>'; 
                                }
                            }
                            code +='</select>';
                            code+='<button type="submit" class="btn btn-primary col-md-6 col-md-offset-3 margin-btn">Commander</button>';
                        }
                        else{
                            var code = '<button type="button" class="btn btn-primary margin-btn" data-toggle="modal" data-target="#modalCarte">Ajouter une carte</button>';
                            $('#submitCommand').hide();
                        }
                        $('#containerCard').html(code);
                    }
                );
            }
            function getService(id){
                $.post(
                    'ajaxCall/AJAx_getService.php',
                    {id:id},
                    function(data){
                        var result = JSON.parse(data);
                        if(result.length>0){
                            var code = '<label for="service">Selectionnez un service</label>'
                                    +'<select id="service" name="service" class="form-control">';
                            for(var i =0;i<result.length;i++){
                                if(i==0){
                                   code+='<option value="'+result[i].idservice+'" selected>'+result[i].libelle+'</option>';  
                                }
                                else{
                                    code+='<option value="'+result[i].idservice+'">'+result[i].libelle+'</option>'; 
                                }
                            }
                            code +='</select>';
                            $('#containerCard').show();
                            $('#proDispo').show();
                        }
                        else{
                            var code = 'Aucun service trouvé pour la profession.';
                            $('#submitCommand').hide();
                            $('#containerCard').hide();
                            $('#proDispo').hide();
                            
                        }
                        $('#containerService').html(code);
                        
                        
                    }

               );
            }
            function getPro(ville,idprof){
                $.post(
                    'ajaxCall/AJAx_getLocatedUtilisateur.php',
                    {ville:ville,idprof:idprof},
                    function(data){
                        var result = JSON.parse(data);
                        if(result.length>0){
                            var code = '<label for="pros">Selectionnez un professionnel</label>'
                                    +'<select id="pros" name="pro" class="form-control">';
                            for(var i =0;i<result.length;i++){
                                if(i==0){
                                    code+='<option value="'+result[i].id+'" selected>'+result[i].nom+' '+result[i].prenom+'</option>'; 
                                }
                                else{
                                    code+='<option value="'+result[i].id+'">'+result[i].nom+' '+result[i].prenom+'</option>'; 
                                }
                            }
                            code +='</select>';
                        }
                        else{
                            var code = 'Aucun proffessionnel disponible dans votre région.';
                        }
                        $('#proDispo').html(code);
                        $('#submitCommand').hide();
                    }
               );
            }
        </script>
    </body>
</html>

