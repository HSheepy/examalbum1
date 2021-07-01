<?php

namespace Controllers;


class Home //extends Controller si besoin d'un model
{
    //  protected $modelName; si besoin d'un model


    
/**
     * affiche l'accueil du framework
     * 
     * 
     */
    public function index()
    {
        $titreDeLaPage = "Accueil Framework";
//on définit les variables
         $message = "Bienvenue dans MA DOCUMENTATION RIEN QU'A MOI TRALALA";
         $messageChangeable = "Ouais salut, j'suis giga naze comme message, change moi stp";
//on check si c'est pas vide 
         if(!empty($_POST['messageChangeable'])){
             $messageChangeable = $_POST['messageChangeable'];
         }

        // render un template

        \Rendering::render('home/home', compact('titreDeLaPage', 'message', 'messageChangeable'));


    }


}

