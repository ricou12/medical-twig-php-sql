<?php
require_once(__DIR__.'/BaseController.php');

class PatientController extends BaseController {
    // Rendu de la page ajouter un patient
    function render_newPatient()
    {
        echo $this->render('patients/ajouter-patient.html.twig', ['title' => 'Nouveau patient']);
    }

    // Ajoute un patient
    function add_newPatient($nom,$prenom,$naissance,$tel,$email)
    {
        $this->sqlCommande->addNewPatient($nom,$prenom,$naissance,$tel,$email);
        header('Location: index.php?routing=liste-des-patients');
        exit;
    }

    // Rendu de la page liste des patients
    function showListPatient($id)
    {
        $listpatients = $this->sqlCommande->listPatients($id);
        echo $this->render('patients/list-patients.html.twig', 
        ['title' => 'Liste des patients',
        'state' => 'Search',
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
        $message = count($listpatients[1]) != 0 ? "search" : "Aucun résultat trouvé !";
        echo $this->render('patients/list-patients.html.twig', 
        ['title' => 'Liste des patients',
        'state' => $message,
        'listpatients' => $listpatients
        ]);        
    }

    // supprimer un patient
    function deletePatient($id)
    {
        $this->sqlCommande->deletePatient($id);
        header('location: index.php?routing=liste-des-patients');
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
        header('location: index.php?routing=liste-des-patients');
    }

}