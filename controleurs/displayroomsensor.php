<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 28/05/2018
 * Time: 15:24
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


