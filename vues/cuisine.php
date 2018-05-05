<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 04/05/2018
 * Time: 16:06
 */
require ('vues/header.php');
?>

<h1>
    Cuisine
</h1>

<form method="post" action="">

        <p>Cochez les aliments que vous aimez manger : <p/> <br />

    <div class="use-case">
        <input type="checkbox" name="volets" id="volets" size="10"/>
        <p> Volets </p> <br />
        <input type="checkbox" name="lumieres" id="lumieres" />
        <p> Lumières </p>
   </div>

</form>

<p> <a href="index.php?cible=ajouterunepiece.php" >Ajouter une cuisine</a> </p>
<p> <a href="index.php?cible=conditionsutilisations.php" >Ajouter un capteur</a> </p>