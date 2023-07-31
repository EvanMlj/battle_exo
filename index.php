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
                    <label for="nomJoueur">Nom</label>
                    <input type="text" name="nomJoueur" id="nom">
                    <label for="santeJoueur">Santé</label>
                    <input type="number" name="santeJoueur" id="">
                    <label for="attaqueJoueur">Attaque</label>
                    <input type="number" name="attaqueJoueur" id="attaque">
                    <label for="manaJoueur">Mana</label>
                    <input type="number" name="manaJoueur" id="mana">
                </div>

                <div class="ctnPerso" id="ctnAdversaire">
                    <h2>Adversaire</h2>
                    <img src="asset/cyborg-face.svg" alt="icone de l'adversaire" height="150" width="150">
                    <label for="nomAdversaire">Nom</label>
                    <input type="text" name="nomAdversaire" id="nom">
                    <label for="santeAdversaire">Santé</label>
                    <input type="number" name="santeAdversaire" id="">
                    <label for="attaqueAdversaire">Attaque</label>
                    <input type="number" name="attaqueAdversaire" id="attaque">
                    <label for="manaAdversaire">Mana</label>
                    <input type="number" name="manaAdversaire" id="mana">
                </div>
            </div>
            <input type="submit" value="FIGHT">
        </form>
        
        <?php
        recupInfosPersonnages();
        $infosPersos = $_SESSION['donneesPersonnages'];
        echo $infosPersos['joueur']['nom'];
        ?>
    </div>
</body>

</html>