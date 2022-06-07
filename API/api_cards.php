<?php
    include('../utils/connexionBdd.php'); // La variable $bdd se retrouve dans le fichier connexionbdd.php
    //factorisation : pour permettre de simplifier les fonctions


    header("Access-Control-Allow-Origin: *"); // C'est la commande qui va nous permettre de rendre accessible le json
    //json error
    $tab = array( //On crée simplement un tableau d'un json d'erreur
        'error' => 'Pas de Json',);
    
    //test si l'url contient le paramètre 'ALL'
if (isset($_GET['ALL'])) {
    //afficher et encoder un json le résultat de la méthode reqAllCards() 
    echo json_encode(reqAllCards($bdd)); //on va echo le tableau json de la table 'cartes'
}

if(isset($_GET['white'])){
    echo json_encode(reqWhiteCards($bdd));
}

if(isset($_GET['red'])){
    echo json_encode(reqRedCards($bdd));
}

if(isset($_GET['black'])){
    echo json_encode(reqBlackCards($bdd));
}

if(isset($_GET['blue'])){
    echo json_encode(reqBlueCards($bdd));
}

if(isset($_GET['green'])){ // recupère les paramètres quand l'API est appelé
    echo json_encode(reqGreenCards($bdd));
}

if(isset($_GET['creature'])){ // $_GET récupère le paramètre créature dans l'url (si la valeur existe). Si c'est vrai dans l'URL
    echo json_encode(reqCreatureCards($bdd));
}

if(isset($_GET['instant'])){
    echo json_encode(reqInstantCards($bdd));
}

if(isset($_GET['sorcery'])){
    echo json_encode(reqSorceryCards($bdd));
}

if(isset($_GET['enchant'])){
    echo json_encode(reqEnchantCards($bdd));
}

if(isset($_GET['planes'])){
    echo json_encode(reqPlanesCards($bdd));
}

if(isset($_GET['land'])){
    echo json_encode(reqLandCards($bdd));
}

if(isset($_GET['creatures'])){ 
    echo json_encode(reqCreatureCombo($bdd));
}

if(isset($_GET['instants'])){ 
    echo json_encode(reqInstantCombo($bdd));
}

if(isset($_GET['sorcerys'])){ 
    echo json_encode(reqSorceryCombo($bdd));
}

if(isset($_GET['enchants'])){ 
    echo json_encode(reqEnchantCombo($bdd));
}

if(isset($_GET['planess'])){ 
    echo json_encode(reqPlanesCombo($bdd));
}

if(isset($_GET['lands'])){ 
    echo json_encode(reqLandsCombo($bdd));
}

// if(isset($_GET['type'])== "crea"){
//     echo "Vous avez choisi créature";
//     var_dump($_GET['type']);
// }

//fonction qui retourne le contenu de la table "cartes" dans un tableau
    function reqAllCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //requete SQL
            $requete = "SELECT * FROM carte"; // on va stocker dans la variable requete la requête sql
            // Execution de la requéte SQL.
            $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
            //variable $output (Arraylist) contenant le résultat de la requéte!!!!!!!!!!!!!!!!!
            $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
        }
        catch (Exception $e) // catch: arrête le script et affiche les erreurs
        {
            die('Erreur : ' . $e->getMessage());
        };
        //retourne une Arraylist
        return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    }

    function reqWhiteCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte IN ('W','R/W','B/W','U/W','G/W')"; // on va stocker dans la variable requete la requête sql
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

    function reqRedCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte IN ('R','R/W','B/R','R/U','G/R')"; // on va stocker dans la variable requete la requête sql
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
        return $output; //on retourne le tableau
    }

    function reqBlackCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte IN ('B','B/W','B/R','B/R','B/G')"; // on va stocker dans la variable requete la requête sql
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

    function reqBlueCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte IN ('U','U/W','R/U','B/U','G/U')"; // on va stocker dans la variable requete la requête sql
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

    function reqGreenCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte IN ('G','G/W','G/R','B/G','G/U')"; // on va stocker dans la variable requete la requête sql
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


    function reqCreatureCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE type_carte LIKE 'Creature%'"; // on va stocker dans la variable requete la requête sql
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

    function reqInstantCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE type_carte='Instant'"; // on va stocker dans la variable requete la requête sql
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

    function reqSorceryCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE type_carte='Sorcery'"; // on va stocker dans la variable requete la requête sql
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

    function reqEnchantCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE type_carte LIKE 'Enchantment%'"; // on va stocker dans la variable requete la requête sql
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

    function reqPlanesCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE type_carte LIKE 'Legendary Planeswalker%'"; // on va stocker dans la variable requete la requête sql
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

    function reqLandCards($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE type_carte LIKE 'Land%'"; // on va stocker dans la variable requete la requête sql
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

    // function reqCreatureComboWhite()
    // {        
    //     try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
    //     {   
    //         //connexion à la Base de données mtg_project
    //         include('../utils/connexionBdd.php');
    //         //requete SQL
    //         $requete = "SELECT * FROM carte WHERE color_carte LIKE 'W%' AND type_carte LIKE 'Creature%'"; // on va stocker dans la variable requete la requête sql
    //         // Execution de la requéte SQL.
    //         $reponse = $bdd->query($requete); // dans la variable reponse on va stocker l'éxécution de la requête sql
    //         //variable $output (Arraylist) contenant le résultat de la requéte
    //         $output = $reponse->fetchAll(PDO::FETCH_ASSOC); // dans la variable output on va stocker dans un tableau toutes les résulats de la requête
    //     }
    //     catch (Exception $e) // catch: arrête le script et affiche les erreurs
    //     {
    //         die('Erreur : ' . $e->getMessage());
    //     }
    //     //retourne une Arraylist
    //     return $output; //on retourne le tableau (contenu de la table 'cartes' de la bdd)
    // };

    function reqCreatureCombo($bdd)
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte LIKE 'R%' AND type_carte LIKE 'Creature%'"; // on va stocker dans la variable requete la requête sql
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

    function reqInstantCombo()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte LIKE 'R%' AND type_carte LIKE 'Instant%'"; // on va stocker dans la variable requete la requête sql
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

    function reqSorceryCombo()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte LIKE 'R%' AND type_carte LIKE 'Sorcery%'"; // on va stocker dans la variable requete la requête sql
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

    function reqEnchantCombo()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte LIKE 'R%' AND type_carte LIKE 'Enchantment%'"; // on va stocker dans la variable requete la requête sql
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

    function reqPlanesCombo()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte LIKE 'R%' AND type_carte LIKE 'Legendary Planeswalker%'"; // on va stocker dans la variable requete la requête sql
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

    function reqLandsCombo()
    {        
        try //try permet d'éxécuter tant qu'il n'y pas d'erreur dans la fonction
        {   
            //connexion à la Base de données mtg_project
            include('../utils/connexionBdd.php');
            //requete SQL
            $requete = "SELECT * FROM carte WHERE color_carte LIKE 'R%' AND type_carte LIKE 'Land%'"; // on va stocker dans la variable requete la requête sql
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