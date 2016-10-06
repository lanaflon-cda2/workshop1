<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commande
 *
 * @author pascal
 */
class Commande extends Modele{
    public function ajouterCommande($prof,$client,$service) {
        $sql = 'insert into commande(idcom,idp, idc,idservice, datecom)'
            . ' values(NULL, ?, ?, ?, NOW())';

        $this->executerRequete($sql, array($prof,$client,$service));
    }
}
