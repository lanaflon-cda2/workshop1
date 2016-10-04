<?php

require_once 'Modele/Profil.php';
require_once 'Vue/Vue.php';

class ControleurProfil {

    private $profil;

   

    public function __construct() {
        $this->profil = new Profil();
    }
  public function voirprofil() {
        $profil = $this->profil->seeProfil($_SESSION['iduser']);
        $vue = new Vue("Profil");
        
        $vue->generer(array('profil' => $profil));
    }
    // Affiche les détails sur un billet
    public function profil() {
        $profil = $this->profil->seeProfil($_SESSION['iduser']);
        $vue = new Vue("ModificationProfil");
        
        $vue->generer(array('profil' => $profil));
    }

    // Ajoute un commentaire à un billet
    public function modifierProfil($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $iduser, $idprof) {
        // Sauvegarde du commentaire

        $this->profil->updateProfil($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $iduser, $idprof);
        
    }

}

