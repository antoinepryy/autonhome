<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 15/06/2018
 * Time: 15:29
 */

if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}

$a = getRoomAllLightsEffector($bdd, 4);
die(var_dump($a));