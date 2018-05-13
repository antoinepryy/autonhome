<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 11/05/2018
 * Time: 19:58
 */

$section = 'espaceadmin';


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

include('vues/espaceadmin.php');