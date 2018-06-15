<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 12/06/2018
 * Time: 12:18
 */

if(!function_exists("importAllSessionsAndModels")){ //Upload auto de toutes les variables de sessions ainsi que des fcts de BDD
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}

$test = getDeviceIdFromSocket($bdd, "sensor", "G10B", "60");

die(var_dump($test));