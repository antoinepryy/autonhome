<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 03/05/2018
 * Time: 11:03
 */

$section = 'changermotdepasse';
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

include('vues/changermotdepasse.php');