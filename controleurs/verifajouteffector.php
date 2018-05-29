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
    for ($number_lightEffector = 1; $number_lightEffector <= $_POST['effectorlightquantity']; $number_lightEffector++){

        $data = array(
            'name' => $_POST['nameLightEffector'.$number_lightEffector],
            'state' => "ORD",
            'id_room' => $_GET['roomchoice'],
            'id_effectorType' => 6,
        );
        $addSensor = createEffector($bdd,$data);

    }
}

if(isset($_POST["shutterquantity"],$_GET['roomchoice'])){
    for ($number_shutter = 1; $number_shutter <= $_POST['shutterquantity']; $number_shutter++){

        $data = array(
            'name' => $_POST['nameShutter'.$number_shutter],
            'state' => "ORD",
            'id_room' => $_GET['roomchoice'],
            'id_effectorType' => 5,
        );
        $addSensor = createEffector($bdd,$data);

    }
}



if(isset($_POST["fanquantity"],$_GET['roomchoice'])){
    for ($number_fan = 1; $number_fan <= $_POST['fanquantity']; $number_fan++){

        $data = array(
            'name' => $_POST['nameFan' . $number_fan],
            'state' => "ORD",
            'id_room' => $_GET['roomchoice'],
            'id_effectorType' => 4,
        );
        $addSensor = createEffector($bdd, $data);

    }

}