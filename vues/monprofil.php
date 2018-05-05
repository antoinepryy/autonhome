<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 04/05/2018
 * Time: 15:56
 */
require ('vues/header.php');
?>

    <h1 align="center">Mon profil </h1>

    <section class= Mon profil>

        <form class="formulairemonprofil" method="post" action="monprofil.php">
            <div class="elementsformulairemonprofil">

                <label hidden class="nom">nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom">
                <label hidden class="prénom"> prénom </label><br>
                <input type="text" name="prénom" id="prénom" placeholder="Prénom">
                <label hidden class="e-mail"> addresse e-mail</label><br>
                <input type="email" name="e-mail" id="e-mail" placeholder="adresse e-mail">
                <label hidden class="adresse postale"> adresse postale </label><br>
                <input type="tel" name="adresse postale" id="adresse postale" placeholder="adresse postale">
                <label hidden class="numéro" > numéro de téléphone </label><br>
                <input type="text" name="numéro" id="numéro" placeholder="numéro de téléphone">
                <button type="submit" name="submit">Modifier mot de passe </button>
                <button class="valider" type="submit" name="submit">valider </button>
            </div>

        </form>


    </section>