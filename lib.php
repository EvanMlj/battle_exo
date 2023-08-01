<?php

function verifFormAndStockSession()
{
    if (isset($_POST['joueur']) && isset($_POST['adversaire'])) {
        $joueurInfos = $_POST['joueur'];
        $adversaireInfos = $_POST['adversaire'];

        $_SESSION['joueur'] = $joueurInfos;
        $_SESSION['adversaire'] = $adversaireInfos;

    } else {
        echo "Les informations des personnages n'ont pas été envoyées correctement.";
    }
}

//  function deadOrAlive() {
//     if ()
//  }

function Attaque() 
{
    if ($_SERVER["REQUEST_METHOD"]=== 'GET' && isset($_GET["attaque"])) {
        $_SESSION["adversaire"]["sante"] = max($_SESSION["adversaire"]["sante"] - $_SESSION["joueur"]["attaque"], 0 ) ; 
    } 
} 

function fuite (){
    if ($_SERVER["REQUEST_METHOD"]=== 'GET' && isset($_GET["fuite"])) {
        session_destroy() ; 
    }
}

function soin(){
    if($_SERVER["REQUEST_METHOD"] === 'GET' && isset($_GET["soin"])) {
        $_SESSION['joueur']['sante'] += $_SESSION['joueur']['mana']; 
        $_SESSION['joueur']['mana'] -= $_SESSION['joueur']['mana'];
    }
    return $_SESSION['joueur']['sante'] ; 
} 
