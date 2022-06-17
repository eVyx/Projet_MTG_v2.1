<?php
     //import
    //  require_once '../utils/connexionbdd.php';
    include '../models/model_user.php';
     
     include '/views/page_inscription_mvc.php';
    //test logique:
    //variable qui va contenir les messages erreurs
    //test si on à cliqué sur le bouton submit (test si les champs existes)
    if(isset($_POST['name']) && isset($_POST['mdp']) && isset($_POST['mail'])){
        //test si les champs existent et ne sont pas vides
        if($_POST['name'] !="" AND $_POST['mdp'] !="" AND $_POST['mail'] !=""){
            $model_user = new Model_user();
            $model_user -> createUser ();
            
        }
        else{
            //message erreur veuillez compléter les champs de formulaire
            $message =  "Veuillez compléter tous les champs du formulaire";
        }
    }

    