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
    Chambre(s)
</h1>

<div class="display-chambre">

    <ul class="chambre-list">
        <?php foreach ($inCategory as $roomInCategory) { ?>
            <li>
                <?php echo ( $roomInCategory['name']);  ?>

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

            </li>
        <?php } ?>
    </ul>
</div>

<p> <a href="index.php?cible=ajoutcapteur" >Ajouter un capteur</a> </p>

<?php

require ('vues/footer.php');
?>
