<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 28/05/2018
 * Time: 16:29
 */

$section = 'mamaison';
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

if(isset($_POST["effectorlightquantity"],$_GET['roomchoice'])){
    for ($number_lightEffector = 1; $number_lightEffector <= $_POST['effectorlightquantity']; $number_lightEffector++){ //Un for pour creer les actionneurs interrupteur lumiere entrés par l'utilisateur

        $data = array(
            'name' => $_POST['nameLightEffector'.$number_lightEffector],  // Recupere le nom entré
            'action' => "OFF",
            'state' => "ORD",
            'id_room' => $_GET['roomchoice'],  //on recuere l'id de la chambre
            'id_effectorType' => 6,   //type interrupteur de lumiere
        );
        $addEffector = createEffector($bdd,$data); //Fonction pour creer les actionneurs

    }
}

if(isset($_POST["shutterquantity"],$_GET['roomchoice'])){
    for ($number_shutter = 1; $number_shutter <= $_POST['shutterquantity']; $number_shutter++){

        $data = array(
            'name' => $_POST['nameShutter'.$number_shutter],  // Recupere le nom entré
            'action' => "OFF",
            'state' => "ORD",
            'id_room' => $_GET['roomchoice'],  //on recuere l'id de la chambre
            'id_effectorType' => 5,  //type volets
        );
        $addEffector = createEffector($bdd,$data);

    }
}



if(isset($_POST["fanquantity"],$_GET['roomchoice'])){
    for ($number_fan = 1; $number_fan <= $_POST['fanquantity']; $number_fan++){

        $data = array(
            'name' => $_POST['nameFan' . $number_fan],  // Recupere le nom entré
            'action' => "OFF",
            'state' => "ORD",
            'id_room' => $_GET['roomchoice'],
            'id_effectorType' => 4,  //type ventilateur
        );
        $addEffector = createEffector($bdd, $data);

    }

}


header("Location: index.php?cible=mamaison&id=".$_GET['id'].'&idroom='.$_GET['idroom'].'&roomchoice='.$_GET['roomchoice']);