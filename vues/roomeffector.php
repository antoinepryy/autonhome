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

        foreach ($devices[1] as $effector){ ?>
            <ul>
                <li><?php echo($effector['name'].' : '.$effector['action'].$effector['type']);

                    switch ($effector['type']){
                        case 'Volet':
                            echo('<label class="switch">
                              <input type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
                              <span class="slider"></span>
                              </label>');
                            break;
                        case 'Ventilateur':
                            echo('<label class="switch">
                              <input type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
                              <span class="slider"></span>
                              </label>');
                            break;
                        case 'Lumière':
                            echo('<label class="switch">
                              <input type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
                              <span class="slider"></span>
                              </label>');
                            break;
                    };?></li>

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