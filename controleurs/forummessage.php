<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 25/05/2018
 * Time: 14:13
 */
$section = 'forummessage';

if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$status;
if(isLoggedAsAdmin()){
    $status="AD";
    $section = 'forumMessage';
    $value = getInfos($bdd, $_GET["id"]);
    $text = getMessages($bdd, $_GET["id"]);
}
elseif (isLoggedAsUser()){
    $status="LU";;
    $section = 'forumMessage';
    $value = getInfos($bdd, $_GET["id"]);
    $text = getMessages($bdd, $_GET["id"]);

}
else{
    $status="UU";
}


include('vues/forummessage.php');
