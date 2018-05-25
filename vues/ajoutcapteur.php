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

            <input type="number"  id="lightQuantity" name="lightquantity"  placeholder="Quantité" oninput="createViewInputLight()"/>

            <div id="inputCapteurLumiere"></div>

        </div>

        <div  id= "temperaturelegende" class="temperaturelegende"> <img class="capteurtemperature" src="ressources/pictures/capteurdetemperature.JPG">

            <input type="number"  id="temperatureQuantity" placeholder="Quantité" oninput="createViewInputTemperature()"/>

            <div id="inputCapteurTemperature"></div>

        </div>

        <div class="microlegende"> <img class="microelectret" src="ressources/pictures/microelectret.jpg">

            <input type="number"  id="microQuantity" placeholder="Quantité" oninput="createViewInputMicro()" />

            <div id="inputCapteurMicro"></div>

        </div>


        <input type="number" name="idRoom" value="<?php echo($_GET['id_room']); ?>" hidden>


    </form>

</section>

<?php
require ('vues/footer.php');
?>
