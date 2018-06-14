<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 23/05/2018
 * Time: 23:21
 */
if(!function_exists("importAllSessionsAndModels")){ //Upload auto de toutes les variables de sessions ainsi que des fcts de BDD
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}
$ch = curl_init();
//curl_setopt(
//    $ch,
//    CURLOPT_URL,
//    "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G10B");


//Récupérer les données
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=G10B&TRAME=1G10B123456789");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
//echo "Raw Data:<br />";
//echo("$data");




// Décoder 1 trame
$data_tab = str_split($data,33);


//Mettre les données sous forme de tableau (1 ligne = 1 trame d'un capteur
for($i=0, $size=count($data_tab); $i<$size; $i++) {
    if(strlen($data_tab[$i]) == 33){
        $statusFrame = readFrame($bdd, $data_tab[$i]);
    }
    else{



        break;
    }
}




