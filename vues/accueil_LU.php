<?php
/**
 * Vue : Etat de ma maison
 */

?>


<section class="my-house-state">

    <form id="choice" method="post" action="index.php?cible=accueil">
        <select name="house" class="house-choice" onchange="this.form.submit()">
            <?php foreach($myHouses[0] as $key => $home) {
                if($home['ID']==$id_residency){?>
                    <option value="<?php echo ($id_residency); ?>" selected> <?php echo ($houseName); ?> </option>
                <?php }
                else { ?>
                    <option value="<?php echo ($home['ID']); ?>" > <?php echo ($home['name']); ?> </option>
                <?php }
            }
            ?>
        </select>

        <noscript><input type="submit" value="Submit"></noscript>
    </form>


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