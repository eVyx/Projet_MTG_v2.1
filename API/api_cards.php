<?php
    header("Access-Control-Allow-Origin: *"); // C'est la commande qui va nous permettre de rendre accessible le json
    //json error
    $tab = array( //On crée simplement un tableau d'un json d'erreur
        'error' => 'Pas de Json',);
    //test si le paramétre task existe
    
    //test si l'url contient le paramètre 'ALL'
if (isset($_GET['ALL'])) { // $_GET : c'est la super globale qui permet d'aller lire (api_cards.php?ALL) ; le isset est en relation avec le $_GET
    //afficher et encoder un json le résultat de la méthode reqAllCards() 
    echo json_encode(reqAllCards()); //on va echo le tableau json de la table 'cartes'
}
if(isset($_GET['white'])){
        echo json_encode(reqWhiteCards());
    }

if(isset($_GET['red'])){
        echo json_encode(reqRedCards());
    }

if(isset($_GET['black'])){
    echo json_encode(reqBlackCards());
}

if(isset($_GET['blue'])){
    echo json_encode(reqBlueCards());
}

if(isset($_GET['green'])){
    echo json_encode(reqGreenCards());
}

if(isset($_GET['creature'])){
    echo json_encode(reqGreenCards());
}

if(isset($_GET['instant'])){
    echo json_encode(reqGreenCards());
}

if(isset($_GET['sorcery'])){
    echo json_encode(reqGreenCards());
}

if(isset($_GET['enchant'])){
    echo json_encode(reqEnchantCards());
}

if(isset($_GET['planeswalker'])){
    echo json_encode(reqPlaneswalkerCards());
}

if(isset($_GET['land'])){
    echo json_encode(reqLandCards());
}





// if(isset($_GET['type'])== "crea"){
//     echo "Vous avez choisi créature";
//     var_dump($_GET['type']);
// }



//fonction qui retourne le contenu de la table "cartes" dans un tableau
function reqAllCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    }

    function reqWhiteCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE color IN ('W','R/W','B/W','U/W','G/W')"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    }

    function reqRedCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE color IN ('R','R/W','B/R','R/U','G/R')"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    }

    function reqBlackCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE color IN ('B','B/W','B/R','B/R','B/G')"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    }

    function reqBlueCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes  WHERE color IN ('U','U/W','R/U','B/U','G/U')"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    };

    function reqGreenCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE color IN ('G','G/W','G/R','B/G','G/U')"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    };

    function reqCreatureCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE type='Creature'"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    };

    function reqInstantCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE type='Instant'"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    };

    function reqSorceryCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE type='Sorcery'"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    };

    function reqEnchantCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE type='Enchant'"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    };

    function reqPlaneswalkerCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE type='Planeswalker'"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    };

    function reqLandCards()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM cartes WHERE type='Land'"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        }
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    };
?>