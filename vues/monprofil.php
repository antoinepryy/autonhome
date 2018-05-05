<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 04/05/2018
 * Time: 15:56
 */
require ('vues/header_'.$status.'.php');
?>


    <section class= Mon profil>



        <h1> Mon profil </h1>
        <p>
            Nom : <?php echo($_SESSION["userLastName"]);?>
        </p>
        <p>
            Prénom : <?php echo ($_SESSION["userFirstName"]);?>
        </p>
        <p>
            Mail : <?php echo ($_SESSION["userMail"]);?>
        </p>

    </section>

<?php
include ("vues/footer.php");
?>
