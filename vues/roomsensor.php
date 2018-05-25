<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 24/05/2018
 * Time: 17:38
 */


require ('vues/header_'.$status.'.php');
?>


<section>
    <div class="sensor-container">
        <?php

        foreach ($devices[0] as $sensor){?>
        <ul>
            <li><?php echo($sensor['name'].' : '.$sensor['value']);?></li>
        </ul>
        <?php }
        ?>
    </div>
    <div class="effector-container">
        <?php

        foreach ($devices[1] as $effector){?>
            <ul>
                <li><?php echo($effector['name'].' : '.$action['value']);?></li>
            </ul>
        <?php }
        ?>


    </div>
</section>



<?php require ('footer.php'); ?>