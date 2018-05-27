<?php
/**
 * Vue : Etat de ma maison
 */


?>


<section class="my-house-state">

    <form method="post" action="index.php?cible=accueil">
        <select name="house" class="house-choice">
            <?php foreach($myHouses[0] as $key => $home) {
                if($key==0){?>
                    <option value="<?php echo ($home['ID']); ?>" selected> <?php echo ($home['name']); ?> </option>
                <?php }
                else { ?>
                    <option value="<?php echo ($home['ID']); ?>" > <?php echo ($home['name']); ?> </option>
                <?php }
            }
            ?>
        </select>
        <input type="submit">
    </form>
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