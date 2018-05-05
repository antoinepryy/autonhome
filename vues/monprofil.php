<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 04/05/2018
 * Time: 15:56
 */
require ('vues/header_'.$status.'.php');
?>

    <h1 align="center">Mon profil </h1>


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
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <section class= Mon profil>

                <form class="formulairemonprofil" method="post" action="index.php?cible=verifprofilform">
                    <div class="elementsformulairemonprofil">
                        <input type="text" name="lastName" placeholder="nom" value=<?php echo($_SESSION["userLastName"]);?> required>
                        <input type="text" name="firstName" placeholder="prénom" value=<?php echo($_SESSION["userFirstName"]);?> required>
                        <input type="email" name="mail" placeholder="e-mail" value=<?php echo($_SESSION["userMail"]);?> required>
                        <input type="tel" name="phoneNumber" placeholder="numéro" value=<?php echo($_SESSION["phoneNumber"]);?> required>
                        <input type="number"  name="addressNumber" placeholder="Numéro de rue" value=<?php echo($_SESSION["addressNumber"]);?> required/>
                        <input type="text"  name="addressStreet" placeholder="Rue" value=<?php echo($_SESSION["addressStreet"]);?> required/>
                        <input type="text"  name="addressCity" placeholder="Ville" value=<?php echo($_SESSION["addressCity"]);?> required/>
                        <input type="number" name="addressZipCode" placeholder="Adresse postale" value=<?php echo($_SESSION["addressZipCode"]);?> required>
                        <button class="valider" type="submit" name="submit">valider </button>
                    </div>

                </form>


            </section>
        </div>

    </div>


<?php
include ("vues/footer.php");
?>

