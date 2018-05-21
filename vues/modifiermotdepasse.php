<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 03/05/2018
 * Time: 10:40
 */


require ('vues/header_'.$status.'.php');
?>

<link rel="stylesheet" type="text/css" href="vues/CSS/changerdemotdepasse.css"/>

<section class="container-modifmdp">
    <h1 class="titlemodifiermotdepasse"> Modifier le mot de passe </h1>

    <!-- <div class="container modif"></div> -->

    <form class="formulairemodifiermotdepasse" method="post" action="index.php?cible=verifmodifpassword">
        <div class="elementsformulairemodifiermotdepasse">
            <label hidden>mot de passe actuel</label>       <!-- hidden permet de cacher ce qui se trouve entre les balises label. Placeholder : -->
            <input type="password" name="pass" id="pass" required placeholder="Mot de passe actuel"/>  <br/>

            <label hidden>nouveau mot de passe</label>
            <input type="password" name="passNew" id="passNew" required placeholder="Nouveau mot de passe" minlength="6"/>    <br/>

            <label hidden>nouveau mot de passe</label>
            <input type="password" name="passNewPlain" id="passNew" required placeholder="Confirmation mot de passe" minlength="6"/>    <br/>

            <input type="submit" value  ="Valider" class="bouton" />
        </div>

        <p class="notemdp">Pour plus de sécurité, veuillez choisir un mot de passe de plus de 6 caractères</p>
    </form>
</section>

<?php require('footer.php'); ?>
