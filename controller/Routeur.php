<?php

require_once 'controller/ControllerAcceuil.php';
require_once 'controller/controleurCommander.php';
require_once 'controller/controleurProposition.php';
/*require_once 'Controleur/ControleurBillet.php';
require_once 'Controleur/ControleurInscription.php';
require_once 'Controleur/ControleurVisiteur.php';
require_once 'Controleur/ControleurProfil.php';
require_once 'Controleur/ControleurConnexion.php';
require_once 'Controleur/ControleurAdministrateur.php';*/

class Routeur {

    private $ctrlAccueil;
    private $ctrlCommander;
    private $ctrlProposer;
    //private $ctrlInscription;
    //private $ctrlProfil;
    //private $ctrlConnexion;
   // private $ctrlAdmin;
    //private $ctrlVisiteur;


    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlCommander = new ControleurCommander ();
        $this->ctrlProposer = new ControleurProposition();
        /*$this->ctrlInscription = new ControleurInscription();
        $this->ctrlProfil= new ControleurProfil();
        $this->ctrlConnexion= new ControleurConnexion();
        $this->ctrlAdmin= new ControleurAdmin();
        $this->ctrlVisiteur= new ControleurVisiteur();*/


      session_start();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            
            if (isset($_GET['action'])) {
               /* if ($_GET['action']=='inscription') {
                    $this->ctrlInscription->inscription();

                }
                else if ($_GET['action'] == 'connexion') {
                
                    if(isset($_POST['connexion']))
                    {
                        $email = $this->getParametre($_POST, 'email');
                        $mdp = $this->getParametre($_POST, 'mdp');
                        $mdp=md5($mdp);
                    $connexions=$this->ctrlConnexion->connecter($email, $mdp);


                         if (is_array($connexions))
                         {
                            echo "vous êtes connecté.";
                     
                         }
                         else
                         {
                            echo "Mauvais mot de passe ou mausvais pseudo.";
                         }
                    }
                    $this->ctrlConnexion->connexion();
                    
                }
                elseif ($_GET['action']=='ajouteradmin') {
                    $this->ctrlAdmin->ajouteradministrateur();
                    if(isset($_POST['Ajouter'])){
                     $nomp = $this->getParametre($_POST, 'nom');
                    $prenomp = $this->getParametre($_POST, 'prenom');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $cp = $this->getParametre($_POST, 'cp');
                    $ville = $this->getParametre($_POST, 'ville');
                    $telephone = $this->getParametre($_POST, 'telephone');
                    $email = $this->getParametre($_POST, 'email');
                    $idprof = $this->getParametre($_POST, 'idprof');
                    $mdp = $this->getParametre($_POST, 'mdp');
                    $mdp =md5($mdp);
                    $this->ctrlAdmin->admin($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof);
                }
                }
                elseif ($_GET['action']=='deconnexion') {
                    $this->ctrlConnexion->deconnexion();
                
                }
                else if ($_GET['action'] == 'commenter') {
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
                }
                else if ($_GET['action'] == 'sinscrire') {
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $sexe = $this->getParametre($_POST, 'sexe');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $cp = $this->getParametre($_POST, 'cp');
                    $ville = $this->getParametre($_POST, 'ville');
                    $telephone = $this->getParametre($_POST, 'telephone');
                    $email = $this->getParametre($_POST, 'email');
                    $idprof = $this->getParametre($_POST, 'idprof');
                    $mdp = $this->getParametre($_POST, 'mdp');
                    $mdp =md5($mdp);
                    


                    $this->ctrlInscription->utilisateur($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof, $iduser);
                    if(isset($_POST['Inscription']))
                    {
                    $this->verif($email);
                    if($etat != 0)
                    {
                    echo 'Ce mail / pseudo existe déjà';
                    }
                    else{
                    $this->ctrlConnexion->connexion();
                    }

                    }
                }
                elseif ($_GET['action']=='profil') {
                  if(isset($_POST['Modifier']))

                  {
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $sexe = $this->getParametre($_POST, 'sexe');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $cp = $this->getParametre($_POST, 'cp');
                    $ville = $this->getParametre($_POST, 'ville');
                    $telephone = $this->getParametre($_POST, 'telephone');
                    $email = $this->getParametre($_POST, 'email');
                    $idprof = $this->getParametre($_POST, 'idprof');
                    $mdp = $this->getParametre($_POST, 'mdp');
                    $mdp =md5($mdp);
                    $this->ctrlProfil->modifierProfil($nom, $prenom, $sexe, $adresse, $cp, $ville, $email, $mdp , $telephone, $idprof, $iduser);
                   $this->ctrlProfil->voirprofil();
                  }
                  else 
                  {
                  $this->ctrlProfil->profil();

                  }

                }
                 elseif ($_GET['action']=='voirprofil') {
                  $this->ctrlProfil->voirprofil();

                }*/
                if($_GET['action'] == 'proposer'){
                    $this->ctrlProposer->display();
                }
                elseif($_GET['action'] == 'commander'){
                    $this->ctrlCommander->display();
                }
                else
                    throw new Exception("Action non valide");
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            } 
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}
