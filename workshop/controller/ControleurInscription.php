<?php

require_once 'Modele/Inscription.php';
require_once 'Vue/Vue.php';

class ControleurInscription {

    private $utilisateur;


    public function __construct() {
        $this->utilisateur = new Inscription();

    }

    public function inscription() {

        $vue = new Vue("Inscription");
        $vue->generer2();
        $this->verif($email);
    }


    public function utilisateur($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof) {

        $this->utilisateur->ajouterUtilisateur($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof);

    }

}

?>
