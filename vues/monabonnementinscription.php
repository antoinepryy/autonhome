<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 28/05/2018
 * Time: 15:34
 */

require ('vues/header_'.$status.'.php');
?>


<section class="subscription">
    <h2> MON ABONNEMENT </h2> </br>

    </BR>

    <div class="descriptionsubscription"> PACK UNE MAISON:<br/>
        
        Installation des capteurs de votre choix dans une maison facturée 70 euros + 15 euros / mois pour l'utilisation de la plateforme<br/>


        <br/>PACK PLUSIEURS MAISONS:<br/>
        Installation des capteurs de votre choix dans plusieurs maisons facturé 70 euros et 10 euros par maison supplémentaire + 20 euros/mois pour l'utilisation de la plateforme

    </div>

</section> <br/>

<div class="formulaireInscription">
    <form action="index.php?cible=verifmysubscription" method="post">
        <label > Je m'abonne au </label>
        <select name="choixPackAbonnement" class="choixPackAbonnement" required>
            <option value=""> -- -- </option>
            <option value="packUneMaison"> PACK UNE MAISON</option>
            <option value="packPlusieursMaisons" >PACK PLUSIEURS MAISONS</option>
            <input type="submit" value="Je valide"/>
        </select>   <br/>
    </form>
</div>




<?php
require ('vues/footer.php');
?>

