<?php
// au submit du formulaire d'index.php : récupère les données de joueur et adversaire pour les stockeés en variable de session
function verifFormAndStockSession()
{
    if (isset($_POST['joueur']) && isset($_POST['adversaire'])) {
        $joueurInfos = $_POST['joueur'];
        $adversaireInfos = $_POST['adversaire'];

        $_SESSION['joueur'] = $joueurInfos;
        $_SESSION['adversaire'] = $adversaireInfos;
    }
}
// Vérifie si la santé du joueur ou de l'adversaire est égale à zéro. Si un personnage décédée areBothAlive = False. Si les personnages sont en vie alors ArebothAlive = true
function areBothAlive()
{
    return ($_SESSION['joueur']['sante'] > 0 && $_SESSION['adversaire']['sante'] > 0);
}

// Lorsque que l'attaque est lancée via l'input attaque du formulaire en method get de fight.php, et si l'un des personnages est en vie, alors l'attaque des personnages est soustraite de leur leurs santé.
// Si la santé atteint zéro un echo idique à l'utilisateur que le combat est terminée. 

function Attaque()
{
    if ($_SERVER["REQUEST_METHOD"] === 'GET' && isset($_GET["attaque"]) && areBothAlive()) {

        $_SESSION["adversaire"]["sante"] = max($_SESSION["adversaire"]["sante"] - $_SESSION["joueur"]["attaque"], 0);
        $_SESSION["joueur"]["sante"] = max($_SESSION["joueur"]["sante"] - $_SESSION["adversaire"]["attaque"], 0);

    } elseif (!areBothAlive()) {
        echo "combat terminée";
    }
}
// Detruit la session, l'input fuite du formulaire fight.php renvoie à l'index.php
function fuite()
{
    if ($_SERVER["REQUEST_METHOD"] === 'GET' && isset($_GET["fuite"])) {
        session_destroy();
    }
}


function soin()
{
    if ($_SERVER["REQUEST_METHOD"] === 'GET' && isset($_GET["soin"])) {
        $_SESSION['joueur']['sante'] += $_SESSION['joueur']['mana'];
        $_SESSION['joueur']['mana'] -= $_SESSION['joueur']['mana'];
    }
    return $_SESSION['joueur']['sante'];
}
