<?php

require_once 'Modele/Modele.php';

class Connexion extends Modele {

    public function wantConnexion($email, $mdp) {
        $sql = "SELECT nom, prenom , adresse, cp, ville, mdp, telephone, email, iduser, idprof FROM utilisateur where email='$email' and mdp='$mdp';";
        $connexions = $this->executerRequete($sql);


        return $connexions->fetch();
    }


}
?>
