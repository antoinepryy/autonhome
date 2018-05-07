<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 06/05/2018
 * Time: 16:16
 */
require ('vues/header_'.$status.'.php');
?>

<h1>
    Salle de Bain
</h1>

<div class="imagesalledebain"> <img src="ressources/pictures/salledebain.jpg"> </div>

<form method="post" action="">

    <p>Voulez enclencher les : <p/> <br />

    <div class="use-case">
        <input type="checkbox" name="volets" id="volets" /> <label for="volets">Volets</label>
        <br />
        <input type="checkbox" name="lumieres" id="lumieres" /> <label for="lumieres"> Lumières </label>
    </div>

</form>

<p> <a href="index.php?cible=ajoutpieces" >Ajouter une salle de bain</a> </p>
<p> <a href="index.php?cible=ajoutcapteur" >Ajouter un capteur</a> </p>

<?php

require ('vues/footer.php');
?>
