<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 require_once '../modele/Modele.php';
require_once '../modele/Utilisateur.php';

$modele = new Utilisateur();
echo $modele->getLocatedUtilisateurAJAX($_POST['ville'],$_POST['idprof']);
