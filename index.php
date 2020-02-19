<?php
require_once 'vendor/autoload.php';

// RENDU DU TEMPLATE
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__.'/compilation_cache',
]);

$twig = new \Twig\Environment($loader, [
    'debug' => true,
    // ...
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

// CONNEXION A LA BASE DE DONNEE
require_once ("services/sqlCommand.php");  
$sqlCommande = new MyComponentsSql();
$connect = $sqlCommande->connectDataBase('hospitale2n');


// ROUTAGE
$page = 'home';

if(isset($_GET['routing'])){
   $page =  $_GET['routing'];
}

switch ($page) 
{
    case 'home':
        echo $twig->render('home.html.twig', ['title' => 'Accueil']);
        break;

    // Nouveau patient
    case 'newPt':
        if(isset($_POST['ajout'])){
            $connect = $sqlCommande->connectDataBase('hospitale2n');
            if (isset($_POST["nom"]) & isset($_POST["email"])){
                $sqlCommande->addNew($_POST["nom"],$_POST["prenom"],$_POST["naissance"],$_POST["tel"],$_POST["email"]);
                header('Location: ?routing=listPts');
                exit;
            }
        }
        echo $twig->render('patients/ajouter-patient.html.twig', ['title' => 'Nouveau patient']);
        break;

    // Afficher les infos d'un patient
    case 'patient':
        if(isset($_GET['id'])){
            $profilPatient = $sqlCommande->profilRdvPatients($_GET['id']);
             echo $twig->render('patients/profil-patient.html.twig', 
                ['title' => 'Profil du patient',
                'patient' => $profilPatient
                ]);
        }



    // Liste des patients
    case 'listPts':
        if(isset($_GET['delPatientById']))
        {
            $sqlCommande->deletePatient($_GET['delPatientById']);
            header('location: ?routing=listPts');
            exit;
        } else
        {
            if(isset($_POST['searchPatient']))
            {
                $listpatients = $sqlCommande->searchPatient($_POST['nomPatient']);
            } else
            {
                $listpatients = $sqlCommande->listPatients();
                $test;
            }
            echo $twig->render('patients/list-patients.html.twig', 
                ['title' => 'Liste des patients',
                'listpatients' => $listpatients
                ]);
            break;
        }

    // Modifier les infos d'un patient
    case 'updatePt':
        if (isset($_POST['modifier']))
        {
                $updatePatient = $sqlCommande->updatePatients($_POST['modifier'],$_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['tel'],$_POST['mail']);
                header('location: ?routing=listPts');
        } else 
        {
            if(isset($_GET['id']))
            {
                $profilPatient = $sqlCommande->profilPatients($_GET['id']);
                echo $twig->render('patients/modif-patient.html.twig', 
                        ['title' => 'Modifier infos patients',
                        'updatepatients' => $profilPatient
                        ]);
            }
        }
        break;

    // Liste des rendez-vous
    case 'rdv':
        if(isset($_GET['idDeleteRdv']))
            {
                $sqlCommande->deleteRdv($_GET['idDeleteRdv']);
                header('location: ?routing=rdv');
                exit;
            } else
            {
                $listRdv = $sqlCommande->listeRdv();
                 echo $twig->render('rendez-vous/list-rendezvous.html.twig', 
                ['title' => 'Rendez-vous',
                'listrdv' => $listRdv,
                ]);
            }
            break;

    // Ajouter un rendez-vous
    case 'addRdv':
        if(isset($_POST['newrdv']))
        {
            require_once ("services/sqlCommand.php");
            $sqlCommande = new MyComponentsSql();
            // CONNEXION A LA BASE DE DONNEE
            $connect = $sqlCommande->connectDataBase('hospitale2n');
            if($connect){
                $sqlCommande->rdvPatients($_POST['daterdv'],$_POST['heurerdv'],$_POST['idnom']);
                header('location: ?routing=rdv');
            }
        } else
        {
            echo $twig->render('rendez-vous/ajouter-rendezvous.html.twig', ['title' => 'Nouveau rendez-vous']);
        }
         break;

         // Modifier un rendez-vous
    case 'updateRdv':
        if(isset($_POST['formIdRdv']))
        {
            $sqlCommande->updateRdv($_POST['formIdRdv'],$_POST['dateRdv'],$_POST['heureRdv']);
            header('location: ?routing=rdv');
        } else
        {
            if(isset($_GET['idRdv']))
            {
                $listrdv = $sqlCommande->rdv($_GET['idRdv']);
                echo $twig->render('rendez-vous/modif-rdv.html.twig', 
                        ['title' => 'Modifier un rendez-vous',
                        'updaterdv' => $listrdv
                        ]);
            }
        }
        break;
}