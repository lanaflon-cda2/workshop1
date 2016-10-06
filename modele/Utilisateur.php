<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Utilisateur extends Modele{
    public function getLocatedUtilisateurAJAX($region,$idprof){
        $sql = 'SELECT utilisateur.nom as nom,
                utilisateur.prenom as prenom,
                utilisateur.iduser as id 
                FROM asprof 
                INNER JOIN utilisateur ON asprof.iduser = utilisateur.iduser 
                WHERE ville=? AND idprof =?';
        return json_encode($this->executerRequete($sql,array($region,$idprof))->fetchAll());
    }
    public function getUser($id){
        $sql = 'SELECT *
                FROM utilisateur 
                WHERE iduser=?';
        return $this->executerRequete($sql,array($id))->fetchAll();
    }
}