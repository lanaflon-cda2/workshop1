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
            <form>
                <label for="profession">Séléctionnez un métier:</label>
                <select id="profession" name="profession" class="form-control">
                    <?php
                        foreach($professions as $profession){
                            echo '<option value='.$profession['idprof'].'>'.$profession['libelle'].'</option>';
                        }
                    ?>
                </select>
                <div id="containerService">
                    
                </div>
            </form>
        </section>
        <script type="text/javascript">
            $('#profession').change(function(){
                var id = $(this).val();
                $.post(
                    'ajaxCall/AJAx_getService.php',
                    {id:id},
                    function(data){
                        var result = JSON.parse(data);
                        if(result.length>0){
        
                            var code = '<label for="service">Selectionnez un service</label>'
                                    +'<select id="service" name="service" class="form-control">';
                            for(var i =0;i<result.length;i++){
                                console.log(result[i])
                                code+='<option value="'+result[i].idservice+'">'+result[i].libelle+'</option>'; 
                            }
                            code +='</select>';
                            code+='<button type="submit" class="btn btn-primary">Commander</button>';
                        }
                        else{
                            var code = 'Aucun service trouvé pour la profession.';
                        }
                        $('#containerService').html(code);
                    }
                     
               );
            });
        </script>
    </body>
</html>

