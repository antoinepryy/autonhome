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

    <div>
        <label>Alarme</label>
        <input type="checkbox"/><br />
        <label >Température</label>
        <input type="number" step="0.5"/><br/>
    </div>

    <h4>
        Lumières :
    </h4>

    <form class="light" method="post" action="index.php?cible=accueil">
        <?php foreach ($myRooms as $roomInResidence) { ?>
            <label><?php echo ( $roomInResidence['name']);  ?></label>
            <input type="checkbox" onchange="document.getElementById('formName').submit()" /><br />
        <?php } ?>
        <input type="submit">
    </form>

</section>