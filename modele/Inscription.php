<?php

require_once 'modele/Modele.php';

class Inscription extends Modele {

    public function ajouterUtilisateur($nom, $prenom, $sexe, $datedenaissance, $adresse, $cp, $ville, $email, $mdp , $telephone) {
        $sql = 'insert into utilisateur(nom, prenom, sexe, datedenaissance, adresse, cp, ville, email, mdp , telephone)'
            . ' values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $this->executerRequete($sql, array($nom, $prenom, $sexe, $datedenaissance, $adresse, $cp, $ville, $email, $mdp , $telephone));
    }
    
    public function verif($email) 
    {
        $sql='SELECT email FROM utilisateur  WHERE email=? ';
        
        $result = $this->executerRequete($sql,array($email))->fetchAll();
        if($result){

            if(rowCount($result->fetchAll())>0){
                return true;
            }
        }
        else{
            return false;
        }
    }
}
?>
