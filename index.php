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
    <body>
        <?php require_once 'view/topMenu.php';?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Soins.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Vous voulez vous détendre?</h3>
                        <p>Trouvez un soin du corps, du visage et bien plus encore.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/Coiffeur.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Envie d'une nouvelle coupe?</h3>
                        <p>N'attendez plus et recherchez un coiffeur.</p>
                    </div>
                </div>
				
				<div class="item">
                    <img src="img/Barbier.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Besoin d'une barbe digne de ce nom?</h3>
                        <p>Portez-lui donc une attention particulière.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/Maquillage.jpg" alt="Flower">
                    <div class="carousel-caption">
                        <h3>Un gros évènement en approche?</h3>
                        <p>Foncez pour un maquillage professionnel.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/Manucure.jpg" alt="Flower">
                    <div class="carousel-caption">
                        <h3>Pourquoi ne pas prendre soin de vos doigts?</h3>
                        <p>Essayer donc un service de manucure.</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
		<!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Inscription</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label for="firstname">Prénom:</label>
                            <input type="text" id="firstname" class="form-control" placeholder="Prenom">
                            <label for="lastname">Nom:</label>
                            <input type="text" id="lastname" class="form-control" placeholder="Nom">
                            <label for="sexe">Sexe:</label>
                            <div id="sexe" class="radio">
                                <label class="radio-inline"><input type="radio" name="sexe">Homme</label>
                                <label class="radio-inline"><input type="radio" name="sexe">Femme</label>
                            </div>
                            <label for="firstname">Date de naissance:</label>
                            <input type="text" id="birthdate" class="form-control" placeholder="JJ/MM/AAAA">
                            <label for="adresse">Adresse:</label>
                            <input type="text" id="adresse" class="form-control" placeholder="Ex: 5 rue Dupuy">
                            <label for="codepostal">Code Postal:</label>
                            <input type="text" id="codepostal" class="form-control" placeholder="75001">
                            <label for="ville">Ville:</label>
                            <input type="text" id="ville" class="form-control" placeholder="Ex: Paris,Lyon,Marseille,etc..">
                            <label for="tel">Téléphone:</label>
                            <input type="text" id="tel" class="form-control" placeholder="Ex: XX-XX-XX-XX-XX">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" placeholder="xxxx@xxx.com">
                            <label for="mdp">Mot de Passe:</label>
                            <input type="password" id="mdp" class="form-control">
                            <label for="confpassword">Confirmer mot de passe:</label>
                            <input type="password" id="confpassword" class="form-control">

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Enregistrer</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>

            </div>
        </div>
        <footer>
            
        </footer>
        <script type="text/javascript">
            $('#myCarousel').carousel();
			$('#birthdate').datepicker();
        </script>
    </body>
</html>