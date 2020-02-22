<?php
require_once(__DIR__.'/BaseController.php');

class AppController extends BaseController {

    // Page d'accueil
    function home()
    {
        echo $this->render('home.html.twig', ['title' => 'Accueil']);
    }

    // Rendu de la page ajouter un patient
    function render_newPatient()
    {
        echo $this->render('patients/ajouter-patient.html.twig', ['title' => 'Nouveau patient']);
    }

    // Ajoute un patient
    function add_newPatient($nom,$prenom,$naissance,$tel,$email)
    {
        $this->sqlCommande->addNewPatient($nom,$prenom,$naissance,$tel,$email);
        header('Location: index.php?routing=patients');
        exit;
    }

    // Rendu de la page liste des patients
    function showListPatient($id)
    {
        $listpatients = $this->sqlCommande->listPatients($id);
        echo $this->render('patients/list-patients.html.twig', 
        ['title' => 'Liste des patients',
        'listpatients' => $listpatients
        ]);   
    }

    // rendu de la page profil d'un patient
    function render_profilPatient($id)
    {
        $profilPatient = $this->sqlCommande->profilRdvPatients($id);
        if ($profilPatient)
        {
           echo $this->render('patients/profil-patient.html.twig', 
            ['title' => 'Profil du patient',
            'patient' => $profilPatient
            ]); 
        }
        
    }

    // Rechercher un patient
    function searchPatient($name)
    {
        $listpatients = $this->sqlCommande->searchPatient($name);
        echo $this->render('patients/list-patients.html.twig', 
            ['title' => 'Liste des patients',
            'listpatients' => $listpatients
            ]);
    }

    // supprimer un patient
    function deletePatient($id)
    {
        $this->sqlCommande->deletePatient($id);
        header('location: index.php?routing=patients');
        exit;
    }

    // Rendu de la page MAJ
    function render_modifPatient($id)
    {
        $profilPatient = $this->sqlCommande->profilPatients($id);
        echo $this->render('patients/modif-patient.html.twig', 
                ['title' => 'Modifier infos patients',
                'updatepatients' => $profilPatient
                ]);
    }

    // MAJ des infos d'un patient
    function updatePatient($id,$nom,$prenom,$date,$tel,$mail){
        $updatePatient = $this->sqlCommande->updatePatients($id,$nom,$prenom,$date,$tel,$mail);
        header('location: index.php?routing=patients');
    }

    // Rendu de la page ajouter patient avec RDV
    function render_addPTAndRdv()
    {
        echo $this->render('rendez-vous/ajoutPtRdv.html.twig', 
                        ['title' => 'Modifier infos patients']);
    }

    // Enregistrer le patient et RDV
    function newPtAndRdv($nom,$prenom,$naissance,$tel,$email,$daterdv,$heurerdv)
    {
        $stateOfResquest = $this->sqlCommande->newPtAndRdv($nom,$prenom,$naissance,$tel,$email,$daterdv,$heurerdv);
        header('Location: index.php?routing=patients'); 
        exit; 
    }

    // Rendu de la page liste RDV
    function showListRdv()
    {
        $listRdv = $this->sqlCommande->listeRdv();
        echo $this->render('rendez-vous/list-rendezvous.html.twig', 
        ['title' => 'Rendez-vous',
        'listrdv' => $listRdv,
        ]);
    }

    // Supprimer un RDV
    function deleteRdv($id)
    {
        $this->sqlCommande->deleteRdv($id);
            header('location: index.php?routing=rdvs');
            exit;
    }

    // Rendu de la page modifier un RDV
    function showUpdateRdv($idRdv)
    {
        $listrdv = $this->sqlCommande->rdv($idRdv);
        echo $this->render('rendez-vous/modif-rdv.html.twig', 
                ['title' => 'Modifier un rendez-vous',
                'updaterdv' => $listrdv
                ]);
    }

    // Enregistrer les modification du RDV
    function updateRdv($idRdv,$dateRdv,$heureRdv)
    {
        $this->sqlCommande->updateRdv($idRdv,$dateRdv,$heureRdv);
            header('location: index.php?routing=rdv');
    }

    // Rendu de la page ajouter RDV
    function showRdv()
    {
        $mesPatients = $this->sqlCommande->getPatients();
        echo $this->render('rendez-vous/ajouter-rendezvous.html.twig',
                                    ['title' => 'Nouveau rendez-vous',
                                    'patients' => $mesPatients]);
    }

    // Enregistre un nouveau RDV
    function newRdv($daterdv,$heurerdv,$idnom)
    {
        $this->sqlCommande->newRdv($daterdv,$heurerdv,$idnom);
        header('location: index.php?routing=rdvs');
    }
    
    // Rendu de la page erreur 404
    function erreur404()
    {
        echo $this->render('404.html.twig',['title' => 'Erreur 404']);
    }
}
