<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 03/05/2018
 * Time: 10:40
 */


require ('vues/header_'.$status.'.php');
?>

<h1 class="titlemotdepasseoublie" >Mot de passe oublié</h1>

<section class="container-changermdp">



    <form method="post" action="changermotdepasse.php" class="formulairemotdepasseoublie">
        <label for="email">Mon identifiant (ou adresse mail) :</label>
        <input type="email" name="email" id="email" required/>

        <input type="submit" value  ="Continuer" class="bouton" />

    </form>

    <p class="noteemail">Vous recevrez un e-mail avec un nouveau mot de passe que vous pourrez changer dans l'onglet Editer mon profil</p>
</section>






<?php require('vues/footer.php'); ?>
