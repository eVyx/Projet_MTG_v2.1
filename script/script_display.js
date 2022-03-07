// C'est le fichier qu'on va appeler pour l'API
//Afficher la liste des catégories
//url api
const url = '../API/api_cards.php?ALL'; //on va stocker l'adresse qui récupère toutes les cartes (api_cards.php)
const urlW = '../API/api_cards.php?white'; //on va stocker l'adresse qui récupère toutes les cartes (api_cards.php)
const urlR = '../API/api_cards.php?red';//on va stocker l'adresse qui récupère toutes les cartes (api_cards.php)
const urlB = '../API/api_cards.php?black';//on va stocker l'adresse qui récupère toutes les cartes (api_cards.php)
const urlU = '../API/api_cards.php?blue';//on va stocker l'adresse qui récupère toutes les cartes (api_cards.php)
const urlG = '../API/api_cards.php?green ';//on va stocker l'adresse qui récupère toutes les cartes (api_cards.php)

let urlCreature = '../API/api_cards.php?creature';
let urlInstant = '../API/api_cards.php?instant';
let urlSorcery = '../API/api_cards.php?sorcery';
let urlEnchant = '../API/api_cards.php?enchant';
let urlPlanes = '../API/api_cards.php?planes';
let urlLand = '../API/api_cards.php?land';

async function showCardsApi() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(url); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

async function showWhiteCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlW); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

async function showRedCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlR); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

async function showBlackCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlB); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}

async function showBlueCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlU); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}


async function showGreenCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlG); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
}


// async function showInstantCards() {
//     zone.innerHTML = "";
//     // On stock l'url de l'API json 
//     const data = await fetch(urlInstant); //await = permet d'attendre le chargement de la page
//     // On va stocker le json
//     const json = await data.json(); //.json permet d'instancier un tableau avec la variable
//     // console.log(json)

//     let type; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

//     // On a crée une boucle pour parcourir tout le fichier json
//     for (let i in json) {
//         // On va stocker l'id de l'image à afficher
//         url_image = json[i].urlImage;
//         // afficher les images dans zone
//         zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
//         //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
//     }
// }


//zone pour afficher le contenu de l'api
// document = page html (DOM) ; querySelector permet de récupérer du contenu html ciblé par le CSS cf. page_decks.php
//fonction récupération et affichage du json dans la page

let zone = document.querySelector('#zone');

let white = document.querySelector('#white');
white.addEventListener('click', showWhiteCards);

let red = document.querySelector('#red');
red.addEventListener('click', showWhiteCards);

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

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showInstantCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlInstant); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showSorceryCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlSorcery); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showEnchantCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlEnchant); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showPlanesCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlPlanes); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

async function showLandCards() {
    zone.innerHTML = "";
    // On stock l'url de l'API json 
    const data = await fetch(urlLand); //await = permet d'attendre le chargement de la page
    // On va stocker le json
    const json = await data.json(); //.json permet d'instancier un tableau avec la variable
    // console.log(json)

    let url_image; //On crée une variable qui va stocker l'id de l'img (urlImage -> bdd)

    // On a crée une boucle pour parcourir tout le fichier json
    for (let i in json) {
        // On va stocker l'id de l'image à afficher
        url_image = json[i].urlImage;
        // afficher les images dans zone
        zone.innerHTML += "<img src=https://api.scryfall.com/cards/" + url_image + "?format=image\ height=\"30%\" width=\"10%\"></img >";
        //innerHTML va ajouter le contenu de la balise à l'intérieur de la div "zone" cf. page_decks.php
    }
};

// instant.addEventListener('click', showTypeCards);


// let crea = document.querySelector('#crea')
// crea.addEventListener("click", function(){
//     console.log("1,2,3")
// });
// showCardsApi();