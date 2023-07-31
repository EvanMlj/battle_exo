<?php
session_start() ;
// récupérer les informations du formulaire 
function recupInfosPersonnages()
{

    if (isset($_POST['joueur']) && isset($_POST['adversaire'])) {
        $joueurInfos = $_POST['joueur'];
        $adversaireInfos = $_POST['adversaire'];

        var_dump($joueurInfos);
        var_dump($adversaireInfos);

        $_SESSION['joueur'] = $joueurInfos ;
        $_SESSION['adversaire'] = $adversaireInfos ;
    } else {
        echo "Les informations des personnages n'ont pas été envoyées correctement.";
    }

    
}




