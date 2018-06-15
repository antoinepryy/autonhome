<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 01/06/2018
 * Time: 16:43
 */


include('../../modele/connexion.php');
include('../../modele/room.php');
include('../../modele/roomCategory.php');
include('../../modele/sensors.php');
include('../../modele/users.php');
include('../../modele/forumMessage.php');
include('../../modele/forumDiscussion.php');
include('../../modele/device.php');
include('../../modele/effector.php');
include('../../modele/subcriptionUsers.php');
include('../../modele/charts.php');
include('../../modele/data.php');


switch ($_REQUEST['command']){
    case "modifyOne":
        changeEffectorAction($bdd, $_REQUEST['id'], $_REQUEST['value']=='true'?"ON":"OFF");
        sendFrameOneEffector($bdd,$_REQUEST['id'], $_REQUEST['value']);

        echo ($_REQUEST['value']=='true'?"ON":"OFF");

        break;

    case "modifyAllLight":
        changeRoomLightEffectorAction($bdd,$_REQUEST['id'],$_REQUEST['value']=='true'?"ON":"OFF");
        echo ($_REQUEST['value']=='true'?"ON":"OFF");
        break;

    case "modifyAllFan":
        changeRoomFanEffectorAction($bdd,$_REQUEST['id'],$_REQUEST['value']=='true'?"ON":"OFF");
        echo ($_REQUEST['value']=='true'?"ON":"OFF");
        break;

    case "modifyAllShutter":
        changeRoomShutterEffectorAction($bdd,$_REQUEST['id'],$_REQUEST['value']=='true'?"ON":"OFF");
        echo ($_REQUEST['value']=='true'?"ON":"OFF");
        break;
}

function sendFrameOneEffector($bdd, $id, $value){

    $frame="1G10B1";
    $effector = getInfosFrameFromDeviceId($bdd, $id);
    $type="1";
    $num = $effector["objectNumber"];
    $chk = "00";
    $value = $value=='true'?"1111":"0000";

    $frame = $frame.$type.$num.$value.$chk;

    //$frame="123456789";

    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=G10B&TRAME=".$frame);
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



