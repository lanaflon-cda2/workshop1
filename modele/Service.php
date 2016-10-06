<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Service
 *
 * @author pascal
 */
class Service extends Modele{
    public function getServiceAJAX($id){
        $sql = 'SELECT * FROM service WHERE idprof=?';
        return json_encode($this->executerRequete($sql,array($id))->fetchAll());
    }
    public function getService($id){
        $sql = 'SELECT * FROM service WHERE idservice=?';
        return $this->executerRequete($sql,array($id))->fetchAll();
    }
}
