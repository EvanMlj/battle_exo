<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exo battle</title>
</head>

<body>
    <h1>Battle</h1>
    <div class="prematch">
        <form action="InfosPersos.php" method="post">
            <div class="ctnPersoAdversaire">
                <div class="ctnPerso" id="ctnJoueur">
                    <h2>Joueur</h2>
                    <img src="asset/quick-man.svg" alt="icone du joueur" height="150" width="150">

                    <label for="nom">Nom</label>
                    <input type="text" name="joueur[name]" id="nom">

                    <label for="sante">Santé</label>
                    <input type="number" name="joueur[sante]" id="sante">

                    <label for="attaque">Attaque</label>
                    <input type="number" name="joueur[attaque]" id="attaque">

                    <label for="mana">Mana</label>
                    <input type="number" name="joueur[mana]" id="mana">
                </div>

                <div class="ctnPerso" id="ctnAdversaire">
                    <h2>Adversaire</h2>
                    <img src="asset/cyborg-face.svg" alt="icone de l'adversaire" height="150" width="150">

                    <label for="nom">Nom</label>
                    <input type="text" name="adversaire[name]" id="nom">

                    <label for="sante">Santé</label>
                    <input type="number" name="adversaire[sante]" id="sante">

                    <label for="attaque">Attaque</label>
                    <input type="number" name="adversaire[attaque]" id="attaque">

                    <label for="mana">Mana</label>
                    <input type="number" name="adversaire[mana]" id="mana">
                </div>
            </div>
            <input type="submit" value="FIGHT">
        </form>

        
    </div>
</body>

</html>