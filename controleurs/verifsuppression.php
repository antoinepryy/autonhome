<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 11/05/2018
 * Time: 14:53
 */

$section = 'mamaison';
if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$status;
if(isLoggedAsAdmin()){
    $status="AD";
}
elseif (isLoggedAsUser()){
    $status="LU";
}
else{
    $status="UU";
}

if(isset($_POST["roomName"])){

}