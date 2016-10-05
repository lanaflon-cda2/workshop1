<?php

require_once 'Modele/Connexion.php';
require_once 'Vue/Vue.php';

class ControleurConnexion {

    private $connexion;


    public function __construct() {
        $this->connexion = new Connexion();

    }
 public function deconnexion() {
      

       $vue = new Vue("Deconnexion");
        $vue->generer2();
 session_destroy();
    }
    // Affiche les détails sur un billet
  
       public function connexion() {
      
        $vue = new Vue("Connexion");
       

       
        $vue->generer2();
    }

     public function connecter($email, $mdp) {

        $connexions=$this->connexion->wantConnexion($email,$mdp);
                            $_SESSION['iduser']=$connexions['iduser'];
                            $_SESSION['nom']=$connexions['nom'];
                            $_SESSION['prenom']=$connexions['prenom'];
                            $_SESSION['sexe']=$connexions['sexe'];
                            $_SESSION['adresse']=$connexions['adresse'];
                            $_SESSION['cp']=$connexions['cp'];
                            $_SESSION['ville']=$connexions['ville'];
                            $_SESSION['telephone']=$connexions['telephone'];
                            $_SESSION['email']=$connexions['email'];
                            $_SESSION['mdp']=$connexions['avatar'];
                            $_SESSION['idprof']=$connexions['pseudo'];







       return $connexions;
    }

}

?>
