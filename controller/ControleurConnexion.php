<?php

require_once 'modele/Connexion.php';

class ControleurConnexion {

    private $connexion;

    public function __construct() {
        $this->connexion = new Connexion();

    }
    public function deconnexion() {
     
        session_destroy();
        header('location:index.php');
    }
    // Affiche les détails sur un billet

     public function connexion($email, $mdp) {
        echo'bravo ma gueule';
        $connexions=$this->connexion->wantConnexion($email,$mdp);
        $_SESSION['iduser']=$connexions['iduser'];
        $_SESSION['nom']=$connexions['nom'];
        $_SESSION['prenom']=$connexions['prenom'];
        $_SESSION['sexe']=$connexions['sexe'];
        $_SESSION['datedenaissance']=$connexions['sexe'];
        $_SESSION['adresse']=$connexions['adresse'];
        $_SESSION['cp']=$connexions['cp'];
        $_SESSION['ville']=$connexions['ville'];
        $_SESSION['telephone']=$connexions['telephone'];
        $_SESSION['email']=$connexions['email'];
        $_SESSION['mdp']=$connexions['mdp'];

        return $connexions;
    }
}
