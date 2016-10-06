<?php

require_once 'Modele/Modele.php';

class Profil extends Modele {

    public function seeProfil($iduser) {
        $sql = "SELECT  iduser, nom, prenom , sexe, adresse, cp, ville, email, telephone FROM utilisateur where iduser=?; ";
        $commentaires = $this->executerRequete($sql, array($iduser))->fetchAll();
        return $commentaires;
    }

    public function updateProfil($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof, $iduser) {
        $sql = "UPDATE personne SET nomp=?, prenomp=?, idprof=?, adresse=?, cp=?, telephone=?, email=?, ville=?, iduser=?, mdp=? WHERE iduser=?;";
        
        $this->executerRequete($sql, array($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof, $iduser));
    }
}
?>
