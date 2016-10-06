<?php
    require_once '../modele/Modele.php';
    require_once '../modele/Carte.php';

    $modele = new Carte();
    echo $modele->getCarteAJAX(1);