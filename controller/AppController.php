<?php
require_once(__DIR__.'/BaseController.php');

class AppController extends BaseController {

    // Page d'accueil
    function home()
    {
        echo $this->render('home.html.twig', ['title' => 'Accueil']);
    }

    // Gestion des erreurs
    function handleError(Exception $e){
        if($e->getCode() === 404){
            $this->erreur404($e->getMessage());
        }else{
            echo $this->render('error.html.twig',[
                'error' => $e,
                'with_redirect' => is_a($e, "ExceptionWithRedirect")
            ]);
        }
    }
    
    // Rendu de la page erreur 404
    function erreur404($message)
    {
        echo $this->render('404.html.twig',['message' => $message]);
    }


}
