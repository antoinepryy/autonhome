<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 06/05/2018
 * Time: 19:10
 */

$section = 'donneespersonnelles';
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

include('vues/donneespersonnelles.php');