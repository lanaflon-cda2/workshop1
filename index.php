<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="js/bootstrap/css/bootstrap-theme.css" >
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylshee" type="text/css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
        <style>
            body {
                font: 400 15px/1.8 Lato, sans-serif;
                color: #777;
            }
            h3, h4 {
                margin: 10px 0 30px 0;
                letter-spacing: 8px;      
                font-size: 35px;
                color: #111;
            }
            .container {
                padding: 80px 120px;
            }
			.container-fluid {
                padding-left: 8px;
				padding-right: 8px;
            }
            .person {
                border: 10px solid transparent;
                margin-bottom: 25px;
                width: 80%;
                height: 80%;
                opacity: 0.7;
            }
            .person:hover {
                border-color: #f1f1f1;
            }
            .carousel-inner img {
                -webkit-filter: grayscale(90%);
                filter: grayscale(90%); /* make all photos black and white */ 
                width: 100%; /* Set width to 100% */
				max-height: 100%;
				min-height: 400px;
                margin: auto;
            }
            .bg-1 {
                background: #2d2d30;
                color: #bdbdbd;
            }
            .bg-1 h3 {color: #fff;}
            .bg-1 p {font-style: italic;}
            .list-group-item:first-child {
                border-top-right-radius: 0;
                border-top-left-radius: 0;
            }
            .list-group-item:last-child {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail p {
                margin-top: 15px;
                color: #555;
            }
            .btn {
                padding: 10px 10px;
                background-color: #333;
                color: #f1f1f1;
                border-radius: 0;
                transition: .2s;
            }
            .btn:hover, .btn:focus {
                border: 1px solid #333;
                background-color: #fff;
                color: #000;
            }
            .modal-header, h4, .close {
                background-color: #333;
                color: #fff !important;
                text-align: center;
                font-size: 30px;
            }
            .modal-header, .modal-body {
                padding: 40px 50px;
            }
            .nav-tabs li a {
                color: #777;
            }
            #googleMap {
                width: 100%;
                height: 400px;
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
            }  
            .navbar {
                font-family: Montserrat, sans-serif;
                margin-bottom: 0;
                background-color: #2d2d30;
                border-radius: 0;
				border: 0;
                font-size: 11px !important;
                letter-spacing: 2px;
                opacity: 0.9;
            }
            .navbar li a, .navbar .navbar-brand { 
                color: #FFA500;
            }
            .navbar-nav li a:hover {
                color: #FFA500 !important;
            }
            .navbar-nav li.active a {
                color: #fff !important;
                background-color: #29292c !important;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
				background-color: white;
				top: 7px;
            }
            .open .dropdown-toggle {
                color: #fff;
                background-color: #555 !important;
            }
            .dropdown-menu li a {
                color: #000 !important;
            }
            .dropdown-menu li a:hover {
                background-color: red !important;
            }
            footer {
                background-color: #2d2d30;
                color: #f5f5f5;
                padding: 35px;
            }
            footer a {
                color: #f5f5f5;
            }
            footer a:hover {
                color: #777;
                text-decoration: none;
            }  
            .form-control {
                border-radius: 0;
            }
            textarea {
                resize: none;
            }
            .carousel-caption{
                color: #FFA500;  
            }
            .carousel-caption h3{
                color: #FFA500;
            }
			.carousel-caption p{
				font-size: 20px;
			}
			.day{
                cursor: pointer;
            }
            .day:hover{
                background-color: black;
                color: white;
            }
			@media (max-width: 1020px) {
				.carousel-caption p{
					font-size: 15px;
                }
				.carousel-caption h3 {
					font-size: 25px;
					letter-spacing: 6px;
				}
				footer {
					height: 150px;
				}
            }
            @media (max-width: 610px) {
				.carousel-caption p3{
					font-size: 16px;
					letter-spacing: 2px;
                }
				.carousel-caption h3{
					vertical-align: center;
					font-size: 20px;
					letter-spacing: 4px;
                }
            }
			@media (max-width: 1430px) {
                .navbar-form .form-group {
                    display: none;
                }
            }
			@media (min-width: 768px) and (max-width: 1010px) {
                #brand {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>

                    </button>
                    <a class="navbar-brand" id="logo" href="index.php"><img style="height:40px;margin-top:-7px;float:left;" src="Images/logo.png"></a>
					<p class="navbar-brand" id="brand">PIMP MINUTE</p>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav ">
                        <li><a href="#">COMMANDER UN SERVICE</a></li>
                        <li><a href="#">PROPOSER UN SERVICE</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" name = "login" class="form-control" placeholder="Login">
                            <input type="text" name = "password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Se connecter</button>
						<button class="btn btn-default" data-toggle="modal" data-target="#myModal">S'inscrire</button>
                    </form>
                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->
        </nav>
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
                    <img src="Images/Soins.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Vous voulez vous détendre?</h3>
                        <p>Trouvez un soin du corps ou du visage.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Images/Coiffeur.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Envie d'une nouvelle coupe?</h3>
                        <p>N'attendez plus et recherchez un coiffeur.</p>
                    </div>
                </div>
				
				<div class="item">
                    <img src="Images/Barbier.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Besoin d'une barbe digne de ce nom?</h3>
                        <p>Portez-lui donc une attention particulière.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Images/Maquillage.jpg" alt="Flower">
                    <div class="carousel-caption">
                        <h3>Un gros évènement en approche?</h3>
                        <p>Foncez pour un maquillage professionnel.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Images/Manucure.jpg" alt="Flower">
                    <div class="carousel-caption">
                        <h3>Pourquoi ne pas embellir vos doigts?</h3>
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