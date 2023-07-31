<?php

// récupérer les informations du formulaire 
function recupInfosPersonnages()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nomJoueur = $_POST["nomJoueur"];
        $santeJoueur = $_POST["santeJoueur"];
        $attaqueJoueur = $_POST["attaqueJoueur"];
        $manaJoueur = $_POST["manaJoueur"];
        //stocker les données dans un tableau
        $donneesJoueur = array(
            'nom' => $nomJoueur,
            'santé' => $santeJoueur,
            'attaque' => $attaqueJoueur,
            'mana' => $manaJoueur
        );

        //Pareil pour les données de l'adversaire
        $nomAdversaire = $_POST["nomAdversaire"];
        $santeAdversaire = $_POST["santeAdversaire"];
        $attaqueAdversaire = $_POST["attaqueAdversaire"];
        $manaAdversaire = $_POST["manaAdversaire"];
        //stocker les données dans un tableau
        $donneesAdversaire = array(
            'nom' => $nomAdversaire,
            'santé' => $santeAdversaire,
            'attaque' => $attaqueAdversaire,
            'mana' => $manaAdversaire
        );

        $donneesPersos = array(
            'joueur' => $donneesJoueur,
            'adversaire' => $donneesAdversaire
        );

        $_SESSION['donneesPersonnages'] = $donneesPersos ;
 
    }
}

//exemple pour acceder aux information stocker dans la var session donneesPersonnages : 
// 1) appelle de la fonction
// recupInfosPersonnages();
//         $infosPersos = $_SESSION['donneesPersonnages'];
//         echo $infosPersos['joueur']['nom'];



