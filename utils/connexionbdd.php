<?php   
    //connexion à la base de données
    //(à modifier en fonction de votre base de données dans mon cas la bdd l'appele mtg_project);
    $bdd = new PDO('mysql:host=localhost;dbname=mtg_project_v2.0', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>