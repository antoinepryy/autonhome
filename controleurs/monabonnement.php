<?php

$section = 'monabonnement';
if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}

if(isLoggedAsAdmin()){
    $status="AD";
}
elseif (isLoggedAsUser()){
    $status="LU";
    $clients=joinIdUserSubscription($bdd);
    $array=array('ID'=>$_SESSION['userId'],'0'=>$_SESSION['userId']);
    if (in_array($array,joinIdUserSubscription($bdd))){
        $session='monabonnement';
        $myHouses = getAllUserHouses($bdd, $_SESSION['userId'])[0];
        $i=0;
        $j=0;
        include ('vues/monabonnement.php');
    }

    else {
        $session='monabonnementinscription';
        include ('vues/monabonnementinscription.php');

    }

}
else{
    $status="UU";
}
