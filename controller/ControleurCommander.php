<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurCommander
 *
 * @author pascal
 */
require_once 'modele/Modele.php';
require_once 'modele/Profession.php';

class ControleurCommander {
    private $_idUser;
    private $_page;
    private $_command = 'commander';
    private $_inscription = 'inscription';
    private $_view;
    
    public function __construct(){
        if(isset($_SESSION['iduser'])){
            $this->_page = $this->_command;
        }
        else{
            $this->_page = $this->_inscription;
        }
        
    }
    public function display(){
        if($this->_page == $this->_command){
            $modele = new Profession();
            $professions=$modele->getProfession();
            require_once 'view/commandView.php';
        }
        else{
            require_once 'view/inscriptionView.php';
        }
    }
}
