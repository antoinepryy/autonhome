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
            <li><?php


                echo($sensor['name'].' : ');

                switch ($sensor["id_sensorType"]){
                    case "1":
                        $value = ($sensor['value']==1111)?"Allumée":"Eteinte";
                        echo($value);
                        break;
                    case "2":
                        $value = strval($sensor['value']/10);
                        echo($value." °C");
                        break;
                    case "3":
                        $value = ($sensor['value']==1111)?"PRESENCE DETECTEE":"Pas de mouvement";
                        echo("3");
                        break;
                }



                echo(' <a href='."index.php?cible=charts&sensor=".$sensor["ID"].'><img style="vertical-align: bottom; width: 22px" src="./ressources/pictures/graph.png"/></a></li>');

                ?>
        </ul>
        <?php }
        ?>
    </div>

    <div class="effector-container">
        <?php

        foreach ($devices[1] as $effector){ ?>
            <ul>
                <li><span><?php echo($effector['name'].' : <span id="effector-'.$effector['ID'].'">'.' '.$effector['action'].' '.'</span>'.' '.$effector['type']);?></span>

                    <?php

                    switch ($effector['type']){
                        case 'Volet':
                            echo('<span><label class="switch">
                              </sp><input onchange="postActionTOR(this.id)" '.($effector["action"]=="ON"?"checked":"").' type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
                              <span class="slider"></span>
                              </label></span>');
                            break;
                        case 'Ventilateur':
                            echo('<span><label class="switch">
                              <input onchange="postActionTOR(this.id)" '.($effector["action"]=="ON"?"checked":"").' type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
                              <span class="slider"></span>
                              </label></span>');
                            break;
                        case 'Lumière':
                            echo('<span><label class="switch">
                              <input onchange="postActionTOR(this.id)" '.($effector["action"]=="ON"?"checked":"").' type="checkbox" class="sliderEffector" id='.$effector["ID"].'>
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