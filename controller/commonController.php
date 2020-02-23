<?php
require_once(__DIR__.'/AppController.php');


class CommonController extends AppController {
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
        header('Location: index.php?routing=liste-des-patients'); 
        exit; 
    }
}