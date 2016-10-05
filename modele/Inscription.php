<?php

require_once 'Modele/Modele.php';

class Inscription extends Modele {

    public function ajouterUtilisateur($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof) {
        $sql = 'insert into utilisateur(nom, prenom, sexe, adresse, cp, ville, email, mdp , telephone, idprof)'
            . ' values(?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $this->executerRequete($sql, array($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof));
    }
    
    public function verif($email) 
    {
        $sql='SELECT email FROM utilisateur  WHERE email=? ';
        $sql->bindParam(':email', $email);
        $sql->execute();
        $etat = $sql->rowCount();
        return $sql;
    }
}
?>
