<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/page_decks.css"/>
    <title>Create decks</title>
</head>
<body>
<header>
        <nav class="navbar">
            <h1>LOGO</h1>
            <div class="titreSearch">SEARCH BAR</div>
            <div class="searchBar">
                <input type="text">
            </div>
            <ul>
                <li><a href="page_signIn">Bibliothèque</a> </li>
                <li><a href="page_decks">Decks</a></li>
            </ul>
            <div class="logoMonCompte"><img src="../Images/icon_mon_compte.png" alt="" width="40px" height="40px" />
            </div>
            <div class="monCompte">Mon Compte
            </div>
        </nav>
    </header>

<div class="format">
        <br><br>
        <form action="" method="GET">
            <select id="typeCards" name="type">   
                <option id="selection" value="selection">Sélectionner le type</option>
                <option id="creature" value="creature"> Créature</option>
                <option id="instant" value="instant">Ephémère</option>
                <option id="sorcery" value="sorcery">Rituel</option>
                <option id="enchant" value="enchant">Enchantement</option>
                <option id="planes" value="enchant">Planeswalker</option>
                <option id="land" value="land">Terrain</option>
            </select>
        </br>
        </form>
        </div>
    </div>
</div>


    <div class="icon_display">
        <div id="white"class="icon_deck"><img src="../images/icon_white.png" alt="" width="65" height="68" /></div>
        <div id="red" class="icon_deck"><img src="../images/icon_red.png" alt="" width="65" height="68" /></div>
        <div id="black" class="icon_deck"><img src="../images/icon_black.png" alt="" width="65" height="68" /></div>
        <div id="blue"class="icon_deck"><img src="../images/icon_blue.png" alt="" width="65" height="68" /></div>
        <div id="green"class="icon_deck"><img src="../images/icon_green.png" alt="" width="65" height="68" /></div>
    </div>

    <!-- affichage des cartes via script_display.js-->
    <div id="zone">       
    </div>

    <script src="../script/script_display.js" defer></script>
</body>
</html>
