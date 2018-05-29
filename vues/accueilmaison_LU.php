<?php
/**
 * Vue : Etat de ma maison
 */

?>

<link rel="stylesheet" type="text/css" href="vues/CSS/accueil_LU.css"/>
<section class="my-house-state">

        <select name="house" class="house-choice">
            <option value="<?php echo ($id_residency); ?>" selected> <?php echo ($name); ?> </option>
        </select>
    <h3>
        Etat de votre maison
    </h3>

    <div>
        <label>Alarme</label>
        <input type="checkbox"/><br />
        <label >Température</label>
        <input type="number" step="0.5"/><br/>
    </div>

    <h4>
        Lumières :
    </h4>

    <div class="light">
        <?php foreach ($myRooms as $roomInResidence) { ?>
            <label><?php echo ( $roomInResidence['name']);  ?></label>
            <input type="checkbox"/><br />
        <?php } ?>
    </div>

</section>