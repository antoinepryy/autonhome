<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 13/05/2018
 * Time: 12:18
 */
$section = 'index_forum';
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

include('vues/index_forum.php');