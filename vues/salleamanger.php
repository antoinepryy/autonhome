<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 06/05/2018
 * Time: 16:17
 */
require ('vues/header_'.$status.'.php');
?>

<h1>
    Salle(s) à manger
</h1>

<div class="display-sallesamanger">
    <div class="imagesalleamanger"> <img src="ressources\pictures\salleamanger.jpg"> </div>

<form method="post" action="">

    <p>Enclencher : <p/>

    <div class="use-case">
        <input type="checkbox" name="ventilateur" id="Ventilateur" /> <label for="lumieres"> Ventilateur </label>
        <br />
        <input type="checkbox" name="lumieres" id="Lumières" /> <label for="lumieres"> Lumière </label>
        <br />
    </div>
    <br/>
    <div class="use-case-volets">
    <p> Etat des volets</p>
    <input type="checkbox" name="voletsouverts" id="VoletsOuverts" /> <label for="voletsouverts">Ouverts</label>
    <br />
    <input type="checkbox" name="voletsfermes" id="VoletsFermes" /> <label for="voletsfermes">Fermés</label>
    <br />
    </div>
</form>
</div>

<p> <a href="index.php?cible=ajoutpieces" >Ajouter une salle à manger</a> </p>
<p> <a href="index.php?cible=ajoutcapteur" >Ajouter un capteur</a> </p>

<?php

require ('vues/footer.php');
?>
