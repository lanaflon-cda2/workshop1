<?php

require_once 'Modele/Profil.php';

class ControleurProfil {

    private $profil;

    public function __construct() {
        $this->profil = new Profil();
    }
  public function voirprofil() {
        
        $profil = $this->profil->seeProfil($_GET['iduser'])[0];
        
        require_once 'view/profileView.php';
    }
    // Ajoute un commentaire à un billet
    public function modifierProfil($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $iduser, $idprof) {

        $this->profil->updateProfil($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $iduser, $idprof);
        
    }

}

