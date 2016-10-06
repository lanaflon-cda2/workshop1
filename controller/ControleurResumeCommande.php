<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurResumeCommande
 *
 * @author pascal
 */
require_once 'modele/Modele.php';
require_once 'modele/Utilisateur.php';
require_once 'modele/Service.php';
class ControleurResumeCommande {
    private $userInfos;
    private $proInfos;
    private $pro;
    private $user;
    private $service;
    private $serviceInfo;
    public function __construct() {
        $this->pro = new Utilisateur();
        $this->user = new Utilisateur();
        $this->service = new Service();
        
        
        
    }
    public function display(){
        $user = $this->userInfos[0];
        $this->userInfos = $this->user->getUser($_SESSION['iduser']);
        $pro = $this->pro->getUser($_POST['pro']);
        $service = $this->service->getService($_POST['service'])[0];
        require_once 'view/resumeCommandeView.php';
    }
}
