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
        sendTestframe();
        echo ($_REQUEST['value']=='true'?"ON":"OFF");

        break;

    case "modifyAllLight":
        changeRoomLightEffectorAction($bdd,$_REQUEST['id'],$_REQUEST['value']=='true'?"ON":"OFF");

//        echo ($_REQUEST['value']=='true'?"ON":"OFF");
        break;

    case "modifyAllFan":
        changeRoomFanEffectorAction($bdd,$_REQUEST['id'],$_REQUEST['value']=='true'?"ON":"OFF");
//        echo ($_REQUEST['value']=='true'?"ON":"OFF");
            echo('fans');
        break;

    case "modifyAllShutter":
        changeRoomShutterEffectorAction($bdd,$_REQUEST['id'],$_REQUEST['value']=='true'?"ON":"OFF");
//        echo ($_REQUEST['value']=='true'?"ON":"OFF");
        echo('shutter');
        break;
}

function sendFrameOneEffector($id, $value){
    $frame="1G10B";

    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G10B");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
}

function sendFrameSeveralEffectors(){

}

function sendTestframe(){
    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=G10B&TRAME=1G10B123456789");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);

}



