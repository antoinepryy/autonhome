<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 30/04/2018
 * Time: 15:33
 */

require ('vues/header_'.$status.'.php');

?>

<div class="introassistance">
    <h1 class="titleassistance">ASSISTANCE</h1>
    <p class="noteservice assistance">Si vous rencontrez un problème, vous pouvez contacter contre service Assistance 24h/24 et 7j/7</p>
</div>

<div class="assistancedetail">
    <div class="assistanceappel">
        <img class="logo_assistance_appel" src="ressources/pictures/Assistance_appel.png" title="logo_assistance_appel" alt="logo_assistance_appel"/>
        <p class="texteassistanceappel">Par téléphone  au 0800 47 30 20 97 (appel non surtaxé)</p>
    </div>

    <div class="assistancemail">
        <img class="logo_assistance_mail" src="ressources/pictures/Assistance_mail.png" title="logo_assistance_appel" alt="logo_assistance_appel"/>
        <p class="texteassistancemail">Par mail à assistance@domisep.com</p>
    </div>

    <div class="assistancemessage">
        <img class="logo_assistance_message" src="ressources/pictures/Assistance_message.png" title="logo_assistance_appel" alt="logo_assistance_appel">
        <p class="texteassistancemessage">En envoyant un message instantané dans le chatbox : un technicien vous reprendra dans la minute !</p>
    </div>
</div>

<?php

require ('footer.php');
?>