<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 01/06/2018
 * Time: 16:43
 */

include('../../modele/effector.php');


switch ($_REQUEST['command']){
    case "modifyOne":
        changeEffectorAction($bdd, $_REQUEST['id'], $_REQUEST['value']=='true'?"ON":"OFF");
        echo ($_REQUEST['value']=='true'?"ON":"OFF");
        break;
    case "VinceP":
        break;

}


