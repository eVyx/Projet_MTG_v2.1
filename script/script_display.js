// C'est le fichier qu'on va appeler pour l'API
//Afficher la liste des catégories

const url = '../API/api_cards.php?ALL'; //on va stocker l'adresse qui récupère toutes les cartes (api_cards.php)
const urlW = '../API/api_cards.php?white'; //on va stocker l'adresse qui récupère toutes les cartes blanches (api_cards.php)
const urlR = '../API/api_cards.php?red';
const urlB = '../API/api_cards.php?black';
const urlU = '../API/api_cards.php?blue';
const urlG = '../API/api_cards.php?green';

const urlCreature = '../API/api_cards.php?creature';
const urlInstant = '../API/api_cards.php?instant';
const urlSorcery = '../API/api_cards.php?sorcery';
const urlEnchant = '../API/api_cards.php?enchant';
const urlPlanes = '../API/api_cards.php?planes';
const urlLand = '../API/api_cards.php?land';

async function showCardsApi() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(url); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //On instancie un tableau avec ".json"
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        /// afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

async function showWhiteCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlW); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

async function showRedCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlR); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

async function showBlackCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlB); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

async function showBlueCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlU); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}


async function showGreenCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlG); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

// zone pour afficher le contenu de l'api
// document = page html (DOM) ; querySelector permet de récupérer du contenu html ciblé par le CSS cf. page_decks.php

let zone = document.querySelector('#zone');

let white = document.querySelector('#white');
white.addEventListener('click', showWhiteCards);

let red = document.querySelector('#red');
red.addEventListener('click', showRedCards);

let black = document.querySelector('#black');
black.addEventListener('click', showBlackCards);

let blue = document.querySelector('#blue');
blue.addEventListener('click', showBlueCards);

let green = document.querySelector('#green');
green.addEventListener('click', showGreenCards);

let type = document.querySelector('#typeCards')
type.addEventListener('click', typeCardsSelector);


async function typeCardsSelector(){ //function qui récupère l'index du select html
    let select = document.querySelector('#typeCards').selectedIndex;

        if (select == 0)
            showSelectionCards();
    
        else if (select == 1)
            showCreatureCards();

        else if (select == 2)
            showInstantCards();

        else if (select == 3)
            showSorceryCards();

        else if (select == 4)
            showEnchantCards();

        else if (select == 5)
            showPlanesCards();
    
        else if (select == 6)
            showLandCards();
};


function showSelectionCards() {
    zone.innerHTML = "";
};

async function showCreatureCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlCreature); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showInstantCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlInstant); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;//Nouvelle BDD 
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showSorceryCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlSorcery); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showEnchantCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlEnchant); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showPlanesCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlPlanes); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showLandCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlLand); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage_carte -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage_carte;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //zoneHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

// showCardsApi();