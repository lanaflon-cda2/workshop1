<?php

require_once 'modele/Modele.php';

class Connexion extends Modele {

    public function wantConnexion($email, $mdp) 
    {
        $sql = "SELECT nom, prenom, sexe, datedenaissance, adresse, cp, ville, mdp, telephone, email, iduser FROM utilisateur where email=? and mdp=?;";

        $connexions = $this->executerRequete($sql,array($email,$mdp));

        $test=$connexions->fetch();
        return $test;
    }
}
?>
