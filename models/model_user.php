<?php

require_once '../utils/connexionbdd.php';

class Model_user {

    function createUser(){
        //récupérer les valeurs de l'objet
        $pseudo = $_POST["name"];
        $mdp = $_POST["mdp"];
        $mail = $_POST["mail"];
        
                try{
            $req = $bdd->prepare("INSERT INTO user(nickname_user, mdp_user, mail_user) VALUES (?,?,?)");
            $req->execute([
               $pseudo, 
               $mdp,
               $mail
                ]);
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
}
?>