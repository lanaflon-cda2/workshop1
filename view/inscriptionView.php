<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
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
        <div id="container" >
            <div class="row col-md-6 col-md-offset-3" style="background-color:rgba(255,255,255,0.7)" >
                <div id="login" class="col-md-6">
                    <h2>Déjà membre? Connectez vous!</h2>
                    <form>
                        <div class="form-group">
                            <label class="col-md-12" for="email">E-mail</label>
                            <input id="email" class="col-md-1 form-control" type="email" name="email" placeholder="xxxxxx@xxx.com">
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="password">Password</label>
                            <input id="password" class="col-md-12 form-control" type="password" name="password">
                        </div>

                        <input type="submit" class="btn-primary btn col-md-6 col-md-offset-3" value="Connecter" style="margin-top:2vh;margin-bottom:2vh;">

                    </form>
                </div>
                <div id="inscription" class="col-md-6">
                    <h2>Vous êtes nouveaux?</h2>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Inscrivez-vous!</button>
                </div>  
            </div>
        </div>
        <?php require_once 'modalInscription.php'; ?>

    </body>
</html>