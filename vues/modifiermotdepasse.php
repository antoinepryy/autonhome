<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 03/05/2018
 * Time: 10:40
 */


require ('vues/header.php');        /* modifier par la suite header.php par header_LU.php */
?>


<section class="container-modifmdp">>
    <h1> Modifier le mot de passe </h1>

    <!-- <div class="container modif"></div> -->

    <form method="post" action="modifiermotdepasse.php">
        <div>
            <label hidden>mot de passe actuel</label>       <!-- hidden permet de cacher ce qui se trouve entre les balises label. Placeholder : -->
            <input type="password" name="pass" id="pass" required placeholder="Mot de passe actuel"/>  <br/>

            <label hidden>nouveau mot de passe</label>
            <input type="password" name="passNew" id="passNew" required minlength="6"/>    <br/>

            <label hidden>nouveau mot de passe</label>
            <input type="password" name="passNew" id="passNew" required minlength="6"/>    <br/>

            <input type="submit" value  ="Valider" class="bouton" />
        </div>

        <p class="note">Pour plus de sécurité, veuillez choisir un mot de passe de plus de 6 caractères</p>
    </form>
</section>

<?php require('vues/footer.php');
