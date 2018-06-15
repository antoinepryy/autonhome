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

$lastDateInData = getLastData($bdd)['dateTime'];
$lastDateConverted = substr($lastDateInData, 0,4).substr($lastDateInData, 5,2).substr($lastDateInData, 8,2).substr($lastDateInData, 11,2).substr($lastDateInData, 14,2).substr($lastDateInData, 17,2);

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
$keyStart=0;
foreach ($data_tab as $key => $value){
    $date = substr($value,19,33);

    $booleanVerif = ($date == $lastDateConverted) ? 'true' : 'false';

    if ($booleanVerif == 'true'){

        $keyStart = $key+1;
    }
}


for($k = $keyStart; $k<count($data_tab); $k+=1){
    if(strlen($data_tab[$k]) == 33){
        echo($data_tab[$k].'<br>');
        $statusFrame = readFrame($bdd, $data_tab[$k]);
    }
    else {

        break;
    }
}





