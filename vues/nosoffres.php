<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 03/05/2018
 * Time: 09:38
 */
require ('vues/header_'.$status.'.php');
?>

    <h1>
        OFFRES ET PRODUITS
    </h1>
<div class="all">
    <section class="capteurs">
        <h2>
            Capteurs
        </h2>

        <div class="lumierelegende"> <img class="capteurlumiere" src="ressources/pictures/capteurdelumiereLDR.jpg">

        <P>Capteur de lumière LDR</P>
        </div>

        <div class="temperaturelegende"> <img class="capteurtemperature" src="ressources/pictures/capteurdetemperature.JPG">

        <p>
            Capteur de température LM35
        </p>
        </div>

        <div class="microlegende"> <img class="microelectret" src="ressources/pictures/microelectret.jpg">

        <p>
            Microphone electret
        </p>
        </div>


    </section>

    <section class="subscription">
        <h2> Abonnements </h2>

        <div class="descriptionsubscription"> PACK UNE MAISON:<br/>
            Installation des capteurs de votre choix dans une maison facturée 70 euros + 15 euros / mois pour l'utilisation de la plateforme<br/>


            <br/>PACK PLUSIEURS MAISONS:<br/>
            Installation des capteurs de votre choix dans plusieurs maisons + 20 euros/mois pour l'utilisation de la plateforme

        </div>

    </section>
</div>

<?php require ('footer.php'); ?>
