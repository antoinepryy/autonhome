<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 07/06/2018
 * Time: 09:39
 */
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 25/05/2018
 * Time: 16:40
 */
$section = 'forum';

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

include('vues/forum.php');