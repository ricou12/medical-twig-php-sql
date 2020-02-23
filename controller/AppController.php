<?php
require_once(__DIR__.'/BaseController.php');

class AppController extends BaseController {

    // Page d'accueil
    function home()
    {
        echo $this->render('home.html.twig', ['title' => 'Accueil']);
    }
    
    // Rendu de la page erreur 404
    function erreur404($message)
    {
        echo $this->render('404.html.twig',['message' => $message]);
    }


}
