<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 01/06/2018
 * Time: 16:43
 */

if(!function_exists("importAllSessionsAndModels")){ //Upload auto de toutes les variables de sessions ainsi que des fcts de BDD
    include('controleurs/importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}
$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G10B");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
//echo "Raw Data:<br />";
//echo("$data");

$data_tab = str_split($data,33);



for($i=0, $size=count($data_tab); $i<$size; $i++) {
    if(strlen($data_tab[$i]) == 33){
        $statusFrame = readFrame($bdd, $data_tab[$i]);
    }
    else{

        break;
    }
}




