<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurProposition
 *
 * @author pascal
 */
class ControleurProposition {
    private $_idUser;
    private $_page;
    private $_command = 'commander';
    private $_inscription = 'inscription';
    private $_view;
    
    public function __construct(){
        if(isset($_SESSION['iduser'])){
            $this->_page = 'proposition';
        }
        else{
            $this->_page = 'inscription';
        }
        
    }
    public function display(){
        if($this->_page == 'commander'){
           
            require_once 'view/propositionView.php';
        }
        else{
            require_once 'view/inscriptionView.php';
        }
        
    }
}
