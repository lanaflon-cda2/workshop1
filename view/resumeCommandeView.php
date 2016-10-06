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
        <div id="commandeContainer" class="col-md-8 col-md-offset-2" style="background-color:rgba(255,255,255,0.7)">
            
            <div id="user" class="col-md-6">
                <h2>Vos coodonées:</h2>
                <label class="col-md-12">Nom:<?php    echo $user['nom'];?></label>
                <label class="col-md-12">Prenom:<?php echo $user['prenom'];?></label>
                <label class="col-md-12">Adresse:<?php echo $user['adresse'];?></label>
                <label class="col-md-12">Code Postal:<?php echo $user['cp'];?></label>
                <label class="col-md-12">Ville:<?php    echo $user['ville'];?></label>
                <label class="col-md-12">Téléphone:<?php echo $user['telephone'];?></label>
            </div>
            <div id="pro" class="col-md-6">
                <h2>Les coordonées du professionnel:</h2>
                <label class="col-md-12">Nom:<?php echo $pro[0]['nom'];?></label>
                <label class="col-md-12">Prenom:<?php echo $pro[0]['prenom'];?></label>
                <label class="col-md-12">Adresse:<?php echo $pro[0]['adresse'];?></label>
                <label class="col-md-12">Code Postal:<?php echo $pro[0]['cp'];?></label>
                <label class="col-md-12">Ville:<?php    echo $pro[0]['ville'];?></label>
                <label class="col-md-12">Téléphone:<?php echo $pro[0]['telephone'];?></label>
            </div>
            <div class="col-md-12">
                <center><label>Prix:</label><?php echo' '. $service['prix']?> Euros</center>
            </div>
            <form method="post" action="index.php?action=validerCommande">
                <input type="hidden" value="<?php echo $service[0]['idservice']?>" name="service">
                <input type="hidden" value="<?php echo $pro[0]['iduser']?>" name="prof">
                <input type="hidden" value="<?php echo $user['iduser']?>" name="user">
                <button type="submit" class="btn btn-primary col-md-3 col-md-offset-3 margin-btn">Valider</button>
                <button type="button" class="btn btn-primary col-md-3 margin-btn" onclick="window.location.href='index.php?action=commander'">Annuler</button>
            </form>
        </div>
    </body>
    
</html>

