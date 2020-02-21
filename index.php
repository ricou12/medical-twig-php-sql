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


require_once ("services/sqlCommand.php");  
require_once ("controller/AppController.php");

// CONNEXION A LA BASE DE DONNEE
$sqlCommande = new MyComponentsSql();
$connect = $sqlCommande->connectDataBase('hospitale2n');

// INSTANCIE LA CLASSE AVEC ARGUMENTS (L'OBJET TWIG ET LE MODELE POUR L'ACCES AU DONNEES)
$appController = new AppController($twig, $sqlCommande);

// ROUTAGE
$page = 'home';

if(isset($_GET['routing'])){
   $page =  $_GET['routing'];
}


switch ($page) 
{
    // Page d'accueil
    case 'home':
        $appController->home();
        break;

    // Nouveau patient
    case 'newPt':
        if(isset($_POST['ajout']) && isset($_POST["nom"]) && isset($_POST["email"])){
            $appController->newPatient_POST($_POST["nom"],$_POST["prenom"],$_POST["naissance"],$_POST["tel"],$_POST["email"]);
        }else{
            $appController->newPatient_GET();
        }
        break;

    // Afficher les infos d'un patient
    case 'patient':
        if(isset($_GET['id'])){
            $appController->patient($_GET['id']);
        }
        break;

    // Liste des patients
    case 'listPts':
        if(isset($_GET['delPatientById']))
        {
            $appController->deletePatient($_GET['delPatientById']);
        } else
        {
            if(isset($_POST['searchPatient']))
            {
                $listpatients = $appController->searchPatient($_POST['nomPatient']);
            } else
            {
                if(isset($_GET['pageIndex'])){
                    $listpatients = $appController->listePatients($_GET['pageIndex']);
                } else {
                    $listpatients = $appController->listePatients("1");
                }
            }
            $appController->showListPatient($listpatients);
        }
        break;

    // Modifier les infos d'un patient
    case 'updatePt':
        if (isset($_POST['modifier']))
        {
            $appController->updatePatients($_POST['modifier'],$_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['tel'],$_POST['mail']);
        } else 
        {
            if(isset($_GET['id']))
            {
                $appController->profilPatients($_GET['id']);
            }
        }
        break;

    case 'newPtRdv':
        // ajouter un patient avec un nouveau RDV.
        if(isset($_POST['new_rdv_pat'])){
            if (isset($_POST["nom"]) & isset($_POST["email"])){
                $appController->newPtAndRdv($_POST["nom"],$_POST["prenom"],$_POST["naissance"],$_POST["tel"],$_POST["email"],$_POST['daterdv'],$_POST['heurerdv']);
            }
        }
        $appController->showUpdatePTAndRdv();
        break;

    // Liste des rendez-vous
    case 'rdv':
        if(isset($_GET['idDeleteRdv']))
        {
            $appController->deleteRdv($_GET['idDeleteRdv']);
        } else
        {
            $appController->showListRdv();
        }
        break;

    // Ajouter un rendez-vous
    case 'addRdv':
        if(isset($_POST['newrdv']))
        {
            $appController->newRdv($_POST['daterdv'],$_POST['heurerdv'],$_POST['idnom']);
        } else
        {
            $appController->showRdv();
        }
        break;

        // Modifier un rendez-vous
    case 'updateRdv':
        if(isset($_POST['formIdRdv']))
        {
            $appController->updateRdv($_POST['formIdRdv'],$_POST['dateRdv'],$_POST['heureRdv']);
        } else
        {
            if(isset($_GET['idRdv']))
            {
               $appController->showUpdateRdv($_GET['idRdv']);
            }
        }
        break;
}