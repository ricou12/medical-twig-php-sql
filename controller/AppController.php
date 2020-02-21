<?php
require_once(__DIR__.'/BaseController.php');

class AppController extends BaseController {

    function home()
    {
        echo $this->render('home.html.twig', ['title' => 'Accueil']);
    }
    
    function patient($id)
    {
        $profilPatient = $this->sqlCommande->profilRdvPatients($id);
        echo $this->render('patients/profil-patient.html.twig', 
            ['title' => 'Profil du patient',
            'patient' => $profilPatient
            ]);
    }

    function newPatient_GET()
    {
        echo $this->render('patients/ajouter-patient.html.twig', ['title' => 'Nouveau patient']);
    }

    function newPatient_POST($nom,$prenom,$naissance,$tel,$email)
    {
        $this->sqlCommande->addNewPatient($nom,$prenom,$naissance,$tel,$email);
        header('Location: index.php?routing=listPts');
        exit;
    }

    function deletePatient($id)
    {
        $this->sqlCommande->deletePatient($id);
            header('location: index.php?routing=listPts');
            exit;
    }

    function searchPatient($name)
    {
        return $this->sqlCommande->searchPatient($name);
    }

    function listePatients($id)
    {
        return $this->sqlCommande->listPatients($id);
    }

    function showListPatient($listpatients)
    {
        echo $this->render('patients/list-patients.html.twig', 
            ['title' => 'Liste des patients',
            'listpatients' => $listpatients
            ]);
    }

    function updatePatients($modifier,$nom,$prenom,$date,$tel,$mail){
        $updatePatient = $this->sqlCommande->updatePatients($modifier,$nom,$prenom,$date,$tel,$mail);
        header('location: index.php?routing=listPts');
    }

    function profilPatients($id)
    {
        $profilPatient = $this->sqlCommande->profilPatients($id);
                echo $this->render('patients/modif-patient.html.twig', 
                        ['title' => 'Modifier infos patients',
                        'updatepatients' => $profilPatient
                        ]);
    }

    function newPtAndRdv($nom,$prenom,$naissance,$tel,$email,$daterdv,$heurerdv)
    {
        $stateOfResquest = $this->sqlCommande->newPtAndRdv($nom,$prenom,$naissance,$tel,$email,$daterdv,$heurerdv);
        header('Location: index.php?routing=listPts'); 
        exit; 
    }

    function showUpdatePTAndRdv()
    {
        echo $this->render('rendez-vous/ajoutPtRdv.html.twig', 
                        ['title' => 'Modifier infos patients']);
    }

    function deleteRdv($id)
    {
        $this->sqlCommande->deleteRdv($id);
            header('location: index.php?routing=rdv');
            exit;
    }

    function showListRdv()
    {
        $listRdv = $this->sqlCommande->listeRdv();
        echo $this->render('rendez-vous/list-rendezvous.html.twig', 
        ['title' => 'Rendez-vous',
        'listrdv' => $listRdv,
        ]);
    }

    function newRdv($daterdv,$heurerdv,$idnom)
    {
        $this->sqlCommande->newRdv($daterdv,$heurerdv,$idnom);
        header('location: index.php?routing=rdv');
    }

    function showRdv()
    {
        $mesPatients = $this->sqlCommande->getPatients();
        echo $this->render('rendez-vous/ajouter-rendezvous.html.twig',
                                    ['title' => 'Nouveau rendez-vous',
                                    'patients' => $mesPatients]);
    }

    function updateRdv($formIdRdv,$dateRdv,$heureRdv)
    {
        $this->sqlCommande->updateRdv($formIdRdv,$dateRdv,$heureRdv);
            header('location: index.php?routing=rdv');
    }

    function showUpdateRdv($idRdv)
    {
        $listrdv = $this->sqlCommande->rdv($idRdv);
        echo $this->render('rendez-vous/modif-rdv.html.twig', 
                ['title' => 'Modifier un rendez-vous',
                'updaterdv' => $listrdv
                ]);
    }
}
