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

    <form action="index.php?cible=verifajoutcapteur&roomchoice=<?php echo($_GET['roomchoice']); ?>" method="post">

        <div id= "lumierelegende" class="lumierelegende"> <img class="capteurlumiere" src="ressources/pictures/capteurdelumiereLDR.jpg">

            <input type="number"  id="lightQuantity" name="lightquantity"  placeholder="Quantité" oninput="createViewInputLight()"/>

            <div id="inputCapteurLumiere"></div>

        </div>

        <div  id= "temperaturelegende" class="temperaturelegende"> <img class="capteurtemperature" src="ressources/pictures/capteurdetemperature.JPG">

            <input type="number"  id="temperatureQuantity" name="temperaturequantity" placeholder="Quantité" oninput="createViewInputTemperature()"/>

            <div id="inputCapteurTemperature"></div>

        </div>

        <div class="microlegende"> <img class="microelectret" src="ressources/pictures/microelectret.jpg">

            <input type="number"  id="microQuantity" name="microquantity" placeholder="Quantité" oninput="createViewInputMicro()" />

            <div id="inputCapteurMicro"></div>

        </div>

        <input type="submit" value="Submit">


    </form>

</section>

<?php
require ('vues/footer.php');
?>
