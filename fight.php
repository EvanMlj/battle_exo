<?php
session_start();
$_SESSION['RecuperationInfosPersos'] ;
var_dump($_SESSION['joueur']);
echo "<br>";
echo $_SESSION['joueur']['name'];

?>

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