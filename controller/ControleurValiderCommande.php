<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurValiderCommande
 *
 * @author pascal
 */
require_once 'modele/Modele.php';
require_once 'modele/Commande.php';


class ControleurValiderCommande {
    private $commande;
    public function __construct(){
        $this->commande= new Commande();
        
    }
    public function display(){
        $this->commande->ajouterCommande($_POST['prof'], $_POST['user'], $_POST['service']);
        require_once 'view/validationCommandeView.php';
    }
}
