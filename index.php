<?php
require_once 'vendor/autoload.php';
// RENDU DU TEMPLATE
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
// COMPILATION ET DEBUGGER
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__.'/compilation_cache',
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

// MODELE
require_once ("services/sqlCommand.php");  
// CONTROLLER
require_once ("controller/AppController.php");
require_once ("controller/patientController.php");
require_once ("controller/rdvController.php");
require_once ("controller/commonController.php");

// CONNEXION A LA BASE DE DONNEE
try {
    $sqlCommande = new MyComponentsSql();
    $connect = $sqlCommande->connectDataBase('hospitale2n');
} catch (Exception $e) {
    die('Erreur SQL : ' . $e->getMessage());
}

// INSTANCIE LES CLASSES ENFANTS DE BaseController
$appController = new AppController($twig, $sqlCommande);
$patientController = new PatientController($twig, $sqlCommande);
$rdvController = new RdvController($twig, $sqlCommande);
$commonController = new CommonController($twig, $sqlCommande);

// ROUTAGE PAR DEFAULT (premier chargement)
$page = 'home';

if(isset($_GET['routing'])){
   $page =  $_GET['routing'];
}
// ROUTING
try{
    switch ($page) 
    {
        // Rendu de la page d'accueil
        case 'home':
            $appController->home();
        break;

        // Rendu de la page ajouter un patient
        case 'ajouter-un-patient':
            $patientController->render_newPatient();
        break;

        // Ajoute un patient
        case 'addnewPt':
            if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["naissance"]) && isset($_POST["email"])){
                $patientController->add_newPatient($_POST["nom"],$_POST["prenom"],$_POST["naissance"],$_POST["tel"],$_POST["email"]);
            } 
            else
            {
                throw new Exception('Vérifier que les champs obligatoires soit remplis !');
            }
        break;

        // Rendu de la page liste des patients
        case 'liste-des-patients':
            $id = isset($_POST['pageIndex']) ? $_POST['pageIndex'] : '1';
            $patientController->showListPatient($id);
        break;

        // Rendu de la page profil d'un patient
        case 'patient':
            if(isset($_POST['id'])){
                $patientController->render_profilPatient($_POST['id']);
            } 
            else
            {
                throw new Exception("Cette page n'exite pas");
            }
        break;

        // Rechercher un patient
        case 'rechercher-un-patient':
            $patientController->searchPatient($_POST['nomPatient']);
        break;

        // Supprimer un patient
        case 'supprimer-un-patient':
            $patientController->deletePatient($_POST['delPatientById']);
        break;

        // Rendu de la page MAJ
        case 'modifier-un-patient':
            if(isset($_POST['id']))
            {
                $patientController->render_modifPatient($_POST['id']);
            } 
            else
            {
                throw new Exception("Cette page n'exite pas !");
            }
        break;

        // MAJ des infos d'un patient
        case 'updatePt':
            $patientController->updatePatient($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['tel'],$_POST['mail']);
        break;

        // Rendu de la page ajouter patient avec rendez-vous
        case 'ajouter-patient-avec-rdv':
            $commonController->render_addPTAndRdv();
        break;

        // Enregistrer un patient avec un nouveau RDV.
        case 'newPtRdv':
            if (isset($_POST["nom"]) & isset($_POST["email"])){
                $commonController->newPtAndRdv($_POST["nom"],$_POST["prenom"],$_POST["naissance"],$_POST["tel"],$_POST["email"],$_POST['daterdv'],$_POST['heurerdv']);
            } 
            else
            {
                throw new Exception("Vérifier que les champs obligatoire soit remplis !");
            }
        break;

        // Rendu de la page liste des RDV
        case 'liste-des-rdv':
            $rdvController->showListRdv();
        break;

        // Modifier un rendez-vous
        case 'updateRdv':
            if(isset($_POST['IdRdv']))
            {
                $rdvController->updateRdv($_POST['IdRdv'],$_POST['dateRdv'],$_POST['heureRdv']);
            } 
            else
            {
                throw new Exception("Impossible de modifier ce rendez-vous !");
            }
        break;

        // Rendu de la page modifier un RDV
        case 'modifier-un-rdv':
            if(isset($_POST['idRdv']))
            {
                $rdvController->showUpdateRdv($_POST['idRdv']);
            }
            else
            {
                throw new Exception("Cette page n'exite pas !");
            }
        break;

        // Supprimer un RDV
        case 'delRdv':
            if(isset($_POST['idDeleteRdv'])){
                $rdvController->deleteRdv($_POST['idDeleteRdv']);  
            }
            else
            {
                throw new Exception("Impossible de supprimer ce rendez-vous !");
            }
        break;

        // Rendu de la page ajouter un RDV
        case 'ajouter-un-rdv':
            $rdvController->showRdv();
        break;

        // Ajouter un rendez-vous
        case 'addRdv':
            if(isset($_POST['idnom']))
            {
                $rdvController->newRdv($_POST['daterdv'],$_POST['heurerdv'],$_POST['idnom']);
            }
            else
            {
                throw new Exception("Vérifier que les champs obligatoire soit remplis !");
            }
        break;

        // Si aucune page trouvée alors erreur 404
        default:
        $appController->erreur404("Cette adresse n'existe pas !");
    }
}
catch(Exception $e)
{
    $appController->erreur404($e->getMessage());
}
