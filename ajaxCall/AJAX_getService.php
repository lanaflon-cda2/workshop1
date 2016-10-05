<?php
    require_once '../modele/Modele.php';
    require_once '../modele/Service.php';

    $modele = new Service();
    echo $modele->getServiceAJAX($_POST['id']);