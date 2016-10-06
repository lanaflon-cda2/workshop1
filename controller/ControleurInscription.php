<?php

require_once 'modele/Inscription.php';

class ControleurInscription {

    private $utilisateur;


    public function __construct() {
        $this->utilisateur = new Inscription();

    }

    public function inscription($email) {
        
        return $this->utilisateur->verif($email);
    }

    public function utilisateur($nom, $prenom, $sexe, $datedenaissance, $adresse, $cp, $ville, $email, $mdp , $telephone) {
        $this->utilisateur->ajouterUtilisateur($nom, $prenom, $sexe, $datedenaissance, $adresse, $cp, $ville, $email, $mdp , $telephone);

    }

}

?>
