<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carte
 *
 * @author pascal
 */
class Carte extends Modele{
    //put your code here
    public function getCarteAJAX($id){
        $sql = 'SELECT * FROM carte INNER JOIN utilisateur ON carte.iduser = utilisateur.iduser WHERE utilisateur.iduser=?';
        return json_encode($this->executerRequete($sql,array($id))->fetchAll());

    }
}
