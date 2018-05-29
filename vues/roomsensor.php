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

    <div class="ajoutCapteur">
        <a class="text" href=<?php echo("index.php?cible=ajoutcapteur&id=".$_GET['id'].'&idroom='.$_GET['idroom'].'&roomchoice='.$_GET['roomchoice']); ?>>Ajouter un capteur</a>
    </div>
    <div class="ajoutEffector">
        <a class="text" href=<?php echo("index.php?cible=ajouteffector&id=".$_GET['id'].'&idroom='.$_GET['idroom'].'&roomchoice='.$_GET['roomchoice']); ?>>Ajouter un actionneur</a>
    </div>

</section>



<?php require ('footer.php'); ?>