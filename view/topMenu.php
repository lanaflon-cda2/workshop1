<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="index.php"><img style="height:200%;margin-top:-2.5%;margin-right:2rem;float:left;" src="img/logo.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li><a href="index.php?action=commander">COMMANDER UN SERVICE</a></li>
                <li><a href="index.php?action=proposer">PROPOSER UN SERVICE</a></li>
            </ul>
            <div class="navbar-form navbar-right">
                <?php 
                    if(!isset($_SESSION['iduser'])){?>
                <button class="btn btn-default" data-toggle="modal" data-target="#modalConnexion">CONNEXION</button>
                <button class="btn btn-default" data-toggle="modal" data-target="#myModal">INSCRIPTION</button>
                    <?php }else{?>
                <a href="index.php?action=profile&iduser=<?php echo $_SESSION['iduser'];?>" class="btn btn-primary">Mon Profil</a>
                <a href="index.php?action=deconnexion" class="btn btn-primary">Se déconnecter</a>
                <?php
                    }
                ?>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>