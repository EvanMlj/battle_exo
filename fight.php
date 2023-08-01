<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();
require "lib.php";

verifFormAndStockSession() ;
Attaque() ;
soin() ;
fuite() ; 
isAlive() ; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Combat</h1>

<div class="ctnJoueur">
    <img src="asset/quick-man.svg" alt="image joueur" height="150" width="150">
    <ul>
        <li>nom : <?php echo $_SESSION['joueur']['name'] ?></li>
        <li>santé : <?php echo $_SESSION['joueur']['sante'] ?></li>
        <li>attaque <?php echo $_SESSION['joueur']['attaque'] ?></li>
        <li> mana : <?php echo $_SESSION['joueur']['mana'] ?> </li>
    </ul>
</div>

<div class="ctnAdversaire">
    <img src="asset/cyborg-face.svg" alt="image adversaire" height="150" width="150">
    <ul>
        <li>nom : <?php echo $_SESSION['adversaire']['name'] ?></li>
        <li>santé : <?php echo $_SESSION['adversaire']['sante'] ?></li>
        <li>attaque <?php echo $_SESSION['adversaire']['attaque'] ?></li>
        <li> mana : <?php echo $_SESSION['adversaire']['mana'] ?> </li>
    </ul>
</div>

<form action="fight.php" method="get">
    <input type="submit" value="attaque" id="attaque" name="attaque">
    <input type="submit" value="soin" id="soin" name="soin">
    <input type="submit" value="fuite" id="fuite" name="fuite" formaction="index.php">
</form>
</body>

</html>


