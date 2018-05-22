<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 11/05/2018
 * Time: 14:49
 */

require ('vues/header_'.$status.'.php');
?>

<h1>
    Nos Offres
</h1>

<section class="capteurs">


    <h2>
        Nos Capteurs
    </h2>

    <form action="index.php?cible=verifajoutcapteur" method="post">

        <div id= "lumierelegende" class="lumierelegende"> <img class="capteurlumiere" src="ressources/pictures/capteurdelumiereLDR.jpg">

            <input type="number"  name="lightquantity" id="lightQuantity" placeholder="Quantité" />

            <div id="inputCapteurLumiere"></div>

        </div>

        <div  id= "temperaturelegende" class="temperaturelegende"> <img class="capteurtemperature" src="ressources/pictures/capteurdetemperature.JPG">

            <input type="number"  name="temperatureQuantity" placeholder="Quantité" />

            <div id="inputCapteurTemperature"></div>

        </div>

        <div class="microlegende"> <img class="microelectret" src="ressources/pictures/microelectret.jpg">

            <input type="number"  name="microQuantity" placeholder="Quantité" />

            <div id="inputCapteurMicro"></div>

        </div>

        <button type="button" class="DisplayInput" onclick="createViewInput()">Submit</button>

        <input type="number" name="idRoom" value="<?php echo($_GET['id_room']); ?>" hidden>

    </form>

</section>

<?php
require ('vues/footer.php');
?>
