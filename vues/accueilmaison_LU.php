<?php
/**
 * Vue : Etat de ma maison
 */

?>

<link rel="stylesheet" type="text/css" href="vues/CSS/accueil_LU.css"/>
<script src="vues/JS/accueilmaison_LU.js"></script>
<section class="my-house-state">

        <section name="house" class="house-choice">
            <?php echo ($name); ?>
        </section>
    <h3>
        Etat de votre maison
    </h3>

    <h4>
        Lumières :
    </h4>

    <form class="light" method="post" action="index.php?cible=accueil">
        <?php foreach ($myRooms as $roomInResidence) {
            ?>

            <label><?php echo ( $roomInResidence['name']);  ?></label>
            <input type="checkbox" name="<?php echo ( $roomInResidence['name']);  ?>" id="lightCheckbox" onchange="lightRoomChange(<?php echo $roomInResidence['id'] ?>)" /><br />
        <?php } ?>

    </form>

    <h4>
        Volets :
    </h4>

    <form class="shutter" method="post" action="index.php?cible=accueil">
        <?php foreach ($myRooms as $roomInResidence) {
            ?>

            <label><?php echo ( $roomInResidence['name']);  ?></label>
            <input type="checkbox" name="<?php echo ( $roomInResidence['name']);  ?>" id="shutterCheckbox" onchange="shutterRoomChange(<?php echo $roomInResidence['id'] ?>)" /><br />
        <?php } ?>

    </form>

    <h4>
        Ventilateurs :
    </h4>

    <form class="fan" method="post" action="index.php?cible=accueil">
        <?php foreach ($myRooms as $roomInResidence) {
            ?>

            <label><?php echo ( $roomInResidence['name']);  ?></label>
            <input type="checkbox" name="<?php echo ( $roomInResidence['name']);  ?>" id="fanCheckbox" onchange="fanRoomChange(<?php echo $roomInResidence['id'] ?>)" /><br />
        <?php } ?>

    </form>

</section>