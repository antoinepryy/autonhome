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

        <div class="lumierelegende"> <img class="capteurlumiere" src="ressources/pictures/capteurdelumiereLDR.jpg">

            <input type="checkbox" name="capteurlumiereLDR" id="capteurlumiereLDR" /> <label for="capteurlumiereLDR">Capteur de lumière LDR</label>
            <input type="text"  name="namelumiere" placeholder="Nom du capteur" required/>
            <input type="text"  name="seriallumiere" placeholder="Serial number" required/>

        </div>

        <div class="temperaturelegende"> <img class="capteurtemperature" src="ressources/pictures/capteurdetemperature.JPG">

            <input type="checkbox" name="capteurtemperatureLM32" id="capteurtemperatureLM32" /> <label for="capteurtemperatureLM32">Capteur de température LM35</label>
            <input type="text"  name="nametemperature" placeholder="Nom du capteur" required/>
            <input type="text"  name="serialtemperature" placeholder="Serial number" required/>

        </div>

        <div class="microlegende"> <img class="microelectret" src="ressources/pictures/microelectret.jpg">

            <input type="checkbox" name="microphoneelectret" id="microphoneelectret" /> <label for="microphoneelectret">Microphone electret</label>
            <input type="text"  name="namemicro" placeholder="Nom du capteur" required/>
            <input type="text"  name="serialmicro" placeholder="Serial number" required/>

        </div>

        <input type="number" name="idRoom" value="<?php echo($_GET['id_room']); ?>" hidden>

    </form>

</section>

<?php
require ('vues/footer.php');
?>
