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
try {
    $sqlCommande = new MyComponentsSql();
    $connect = $sqlCommande->connectDataBase('hospitale2n');
} catch (Exception $e) {
        die('Erreur SQL : ' . $e->getMessage());
}



// INSTANCIE LA CLASSE AVEC ARGUMENTS (L'OBJET TWIG ET LE MODELE POUR L'ACCES AU DONNEES)
$appController = new AppController($twig, $sqlCommande);

// ROUTAGE
$page = 'home';

if(isset($_GET['routing'])){
   $page =  $_GET['routing'];
}

try{
    switch ($page) 
    {
        // Rendu de la page d'accueil
        case 'home':
            $appController->home();
        break;

        // Rendu de la page ajouter un patient
        case 'sh_AddPt' :
            $appController->render_newPatient();
        break;

        // Ajoute un patient
        case 'addnewPt':
            if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["naissance"]) && isset($_POST["email"])){
                $appController->add_newPatient($_POST["nom"],$_POST["prenom"],$_POST["naissance"],$_POST["tel"],$_POST["email"]);
            } 
            else
            {
                throw new Exception('Vérifier que les champs obligatoires soit remplis !');
            }
        break;

        // Rendu de la page liste des patients
        case 'patients':
            $id = isset($_GET['pageIndex']) ? $_GET['pageIndex'] : '1';
            $appController->showListPatient($id);
        break;

        // Rendu de la page profil d'un patient
        case 'patient':
            if(isset($_GET['id'])){
                $appController->render_profilPatient($_GET['id']);
            } 
            else
            {
                throw new Exception("Cette page n'exite pas");
            }
        break;

        // Rechercher un patient
        case 'searchPt':
            $appController->searchPatient($_POST['nomPatient']);
        break;

        // Supprimer un patient
        case 'delPt':
            $appController->deletePatient($_GET['delPatientById']);
        break;

        // Rendu de la page MAJ
        case 'sh_updatePt':
            if(isset($_GET['id']))
            {
                $appController->render_modifPatient($_GET['id']);
            } 
            else
            {
                throw new Exception("Cette page n'exite pas !");
            }
        break;

        // MAJ des infos d'un patient
        case 'updatePt':
            $appController->updatePatient($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['tel'],$_POST['mail']);
        break;

        // Rendu de la page ajouter patient avec rendez-vous
        case 'sh_ptRdv':
            $appController->render_addPTAndRdv();
        break;

        // Enregistrer un patient avec un nouveau RDV.
        case 'newPtRdv':
            if (isset($_POST["nom"]) & isset($_POST["email"])){
                $appController->newPtAndRdv($_POST["nom"],$_POST["prenom"],$_POST["naissance"],$_POST["tel"],$_POST["email"],$_POST['daterdv'],$_POST['heurerdv']);
            } 
            else
            {
                throw new Exception("Vérifier que les champs obligatoire soit remplis !");
            }
        break;

        // Rendu de la page liste des RDV
        case 'rdvs':
            $appController->showListRdv();
        break;

        // Modifier un rendez-vous
        case 'updateRdv':
            if(isset($_POST['IdRdv']))
            {
                $appController->updateRdv($_POST['IdRdv'],$_POST['dateRdv'],$_POST['heureRdv']);
            } 
            else
            {
                throw new Exception("Impossible de modifier ce rendez-vous !");
            }
        break;

        // Rendu de la page modifier un RDV
        case 'sh_updateRdv':
            if(isset($_GET['idRdv']))
            {
                $appController->showUpdateRdv($_GET['idRdv']);
            }
            else
            {
                throw new Exception("Cette page n'exite pas !");
            }
        break;

        // Supprimer un RDV
        case 'delRdv':
            if(isset($_GET['idDeleteRdv'])){
                $appController->deleteRdv($_GET['idDeleteRdv']);  
            }
            else
            {
                throw new Exception("Impossible de supprimer ce rendez-vous !");
            }
        break;

        // Rendu de la page ajouter un RDV
        case 'sh_addRdv':
            $appController->showRdv();
        break;

        // Ajouter un rendez-vous
        case 'addRdv':
            if(isset($_POST['idnom']))
            {
                $appController->newRdv($_POST['daterdv'],$_POST['heurerdv'],$_POST['idnom']);
            }
            else
            {
                throw new Exception("Vérifier que les champs obligatoire soit remplis !");
            }
        break;

        // Si aucune page trouvée alors erreur 404
        default:
        $appController->erreur404();
    }
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
