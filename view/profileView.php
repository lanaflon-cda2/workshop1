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
        <div id="profileContainer"class="col-md-6 col-md-offset-3" style="background-color:rgba(255,255,255,0.7)">
            <h2> Information de l'utilisateur:</h2>
            <label class="col-md-12">Nom : <?php echo $profil['nom']; ?></label>
            <label class="col-md-12">Prenom : <?php echo $profil['prenom']; ?></label>
            <label class="col-md-12">Sexe : <?php if($profil['sexe']){
                echo'Homme';
            }
            else{
                echo 'Femme';
            }; ?></label>
            <label class="col-md-12">Adresse: <?php echo $profil['adresse']; ?></label>
            <label class="col-md-12">Code Postal :<?php echo $profil['cp']; ?> </label>
            <label class="col-md-12">Ville : <?php echo $profil['ville']; ?></label>
            <label class="col-md-12">Téléphone : <?php echo $profil['telephone']; ?></label>
            <label class="col-md-12">Email : <?php echo $profil['email']; ?></label>
            
        </div>
    </body>
</html>
