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
}
elseif (isLoggedAsUser()){
    $status="LU";;
    $section = 'forumMessage';
    $value = getAll($bdd, "forum_discussion");
    $text = getMessages($bdd);

}
else{
    $status="UU";
}


include('vues/forummessage.php');
