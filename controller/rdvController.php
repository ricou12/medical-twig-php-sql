<?php
require_once(__DIR__.'/BaseController.php');

class RdvController extends BaseController {
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
            header('location: index.php?routing=liste-des-rdv');
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
        header('location: index.php?routing=liste-des-rdv');
    }
}