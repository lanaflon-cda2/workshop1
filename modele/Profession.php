<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profession
 *
 * @author pascal
 */
class Profession extends Modele {
    
    public function getProfession() {
        $sql = 'SELECT * FROM profession';
        return $this->executerRequete($sql)->fetchAll();
    }
}
