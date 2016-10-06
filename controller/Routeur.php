<?php
session_start();
require_once 'controller/ControllerAcceuil.php';
require_once 'controller/ControleurCommander.php';
require_once 'controller/ControleurProposition.php';
require_once 'controller/ControleurResumeCommande.php';
require_once 'controller/ControleurValiderCommande.php';
require_once 'controller/ControleurProfil.php';
require_once 'Controller/ControleurInscription.php';
require_once 'Controller/ControleurConnexion.php';
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
    private $ctrlResumeCommande;
    private $ctrlValiderCommande;
    private $ctrlProfile;
    private $ctrlConnexion;
    private $ctrlInscription;
    //private $ctrlInscription;
    //private $ctrlProfil;
    //private $ctrlConnexion;
   // private $ctrlAdmin;
    //private $ctrlVisiteur;


    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlCommander = new ControleurCommander ();
        $this->ctrlProposer = new ControleurProposition();
        $this->ctrlResumeCommande = new ControleurResumeCommande();
        $this->ctrlValiderCommande = new ControleurValiderCommande();
        $this->ctrlProfile = new ControleurProfil();
        $this->ctrlConnexion= new ControleurConnexion();
        $this->ctrlInscription = new ControleurInscription();
        /*$this->ctrlInscription = new ControleurInscription();
        $this->ctrlProfil= new ControleurProfil();
        $this->ctrlConnexion= new ControleurConnexion();
        $this->ctrlAdmin= new ControleurAdmin();
        $this->ctrlVisiteur= new ControleurVisiteur();*/
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            
            if (isset($_GET['action'])) {
                 if ($_GET['action'] == 'seconnecter') {
                
                    if(isset($_POST['connexion']))
                    {
                        echo "connexion";
                        $email = $this->getParametre($_POST, 'email');
                        $mdp = $this->getParametre($_POST, 'mdp');
                        
                        $connexions=$this->ctrlConnexion->connexion($email, $mdp);
     
                         if (is_array($connexions))
                         {
                            echo "vous êtes connecté.";
                     
                         }
                         else
                         {
                            echo "Mauvais mot de passe ou mauvais email.";
                         }
                    }
                    header('location:index.php');
                }
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
                elseif ($_GET['action'] == 'sinscrire') {
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $sexe = $this->getParametre($_POST, 'sexe');
                    $datedenaissance = $this->getParametre($_POST, 'datedenaissance');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $cp = $this->getParametre($_POST, 'cp');
                    $ville = $this->getParametre($_POST, 'ville');
                    $telephone = $this->getParametre($_POST, 'telephone');
                    $email = $this->getParametre($_POST, 'email');
                    $mdp = $this->getParametre($_POST, 'mdp');
                    $mdp =md5($mdp);
                                        
                    $etat=$this->ctrlInscription->inscription($email);
                         
                        if($etat)
                        {
                            echo 'test';
                        }
                        else{
                            
                            $this->ctrlInscription->utilisateur($nom, $prenom, $sexe, $datedenaissance, $adresse, $cp, $ville, $email, $mdp , $telephone);
                            $this->ctrlConnexion->connexion($email,$mdp);
                            header('location:index.php');
                        }   

                    
                }
                elseif($_GET['action'] == 'proposer'){
                    $this->ctrlProposer->display();
                }
                elseif($_GET['action']=='resumeCommande'){
                    $this->ctrlResumeCommande->display();
                }
                elseif($_GET['action'] == 'commander'){
                    $this->ctrlCommander->display();
                }
                elseif ($_GET['action']=='deconnexion') {
                    $this->ctrlConnexion->deconnexion();
                
                }
                elseif($_GET['action'] =='validerCommande'){
                    
                    $this->ctrlValiderCommande->display();
                }
                elseif($_GET['action'] == 'profile'){
                    
                    $this->ctrlProfile->voirprofil();
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
