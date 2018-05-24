<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 06/05/2018
 * Time: 16:17
 */
require ('vues/header_'.$status.'.php');
?>
<div class="display-autrespieces">
    <h1>
        Autre(s) pièce(s)
    </h1>



    <ul class="autres-pieces-list">
        <?php foreach ($inCategory as $roomInCategory) { ?>
            <li>
                <h4> <?php echo ( $roomInCategory['name']);  ?> </h4>

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

    <p> <a href="index.php?cible=ajoutcapteur" >Ajouter un capteur</a> </p>

</div>
<?php

require ('vues/footer.php');
?>
