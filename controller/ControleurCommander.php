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
class ControleurCommander {
    private $_idUser;
    private $_page;
    private $_command = 'commander';
    private $_inscription = 'inscription';
    private $_view;
    
    public function __construct(){
        if(isset($_SESSION['iduser'])){
            $this->_view = new CommandView();
        }
        else{
            $this->_view = new InscriptionView();
        }
        
    }
    public function init(){

    }
    
}
