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
    <div class="device-container">


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

        foreach ($devices[1] as $effector){ ?>
            <ul>
                <li><span><?php echo($effector['name'].' : '.$effector['action'].$effector['type']);?></span>

                    <?php

                    switch ($effector['type']){
                        case 'Volet':
                            echo('<span><label class="switch">
                              </sp><input type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
                              <span class="slider"></span>
                              </label></span>');
                            break;
                        case 'Ventilateur':
                            echo('<span><label class="switch">
                              <input type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
                              <span class="slider"></span>
                              </label></span>');
                            break;
                        case 'Lumière':
                            echo('<span><label class="switch">
                              <input type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
                              <span class="slider"></span>
                              </label></span>');
                            break;
                    };?></li>

            </ul>
        <?php }
        ?>


    </div>
    </div>

    <div class="add-button">
        <div class="ajoutCapteur">
            <a class="text" href=<?php echo("index.php?cible=ajoutcapteur&id=".$_GET['id'].'&idroom='.$_GET['idroom'].'&roomchoice='.$_GET['roomchoice']); ?>>Ajouter un capteur</a>
        </div>
        <div class="ajoutEffector">
            <a class="text" href=<?php echo("index.php?cible=ajouteffector&id=".$_GET['id'].'&idroom='.$_GET['idroom'].'&roomchoice='.$_GET['roomchoice']); ?>>Ajouter un actionneur</a>
        </div>

    </div>




</section>



<?php require ('footer.php'); ?>