<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 10/05/2018
 * Time: 11:57
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

$residences = getAllUserHouses($bdd, $_SESSION["userId"]);

if($status=='LU' && !isset($_GET['id'])){
    include ('vues/mamaison.php');
}

elseif ($status=='LU' && isset($_GET['id']) && !isset($_GET['idroom'])){
    $section='mamaisonmain';

    if(belongToUser($bdd, $_SESSION['userId'], $_GET['id'])){
        $houseInfo = getHouseInfoFromId($bdd,$_GET["id"]);
        $myHouses = getAllUserHouses($bdd, $_SESSION['userId']);
        $id_residency=$_GET['id'];
        $myRooms=getAllResidenceRooms($bdd,$id_residency)[0];
        $user = findUserById($bdd, $houseInfo[9]);
        include ('vues/mamaisonmain.php');
        include ('controleurs/accueilmaison_LU.php');
    }
    else{
        include ('vues/erreur404.php');
    }

}

elseif($status=='LU' && isset($_GET['id']) && isset($_GET['idroom']) &&!isset($_GET['roomchoice'])) {
    $section = 'mamaisonroom';
    $inCategory = getAllRoomCategoryRooms($bdd, $_GET['id'], $_GET['idroom'])[0];
    $myHouses = getAllUserHouses($bdd, $_SESSION['userId']);

    if (!isset($_POST['house'])){
        $id_residency=$myHouses[0][0][0];
    }
    else {
        $id_residency=$_POST['house'];
    }
    $myRooms=getAllResidenceRooms($bdd,$id_residency)[0];
    if (belongToUser($bdd, $_SESSION['userId'], $_GET['id'])) {

        switch ($_GET['idroom']) {
            case 1:
                $section = 'chambre';
                include('vues/chambre.php');
                include ('controleurs/accueilmaison_LU.php');
                break;
            case 2 :
                $section = 'salledebain';
                include('vues/salledebain.php');
                include ('controleurs/accueilmaison_LU.php');
                break;
            case 3 :
                $section = 'salon';
                include('vues/salon.php');
                include ('controleurs/accueilmaison_LU.php');
                break;
            case 4 :
                $section = 'salleamanger';
                include('vues/salleamanger.php');
                include ('controleurs/accueilmaison_LU.php');
                break;
            case 5 :
                $section = 'cuisine';
                include('vues/cuisine.php');
                include ('controleurs/accueilmaison_LU.php');
                break;
            case 6 :
                $section = 'autrespieces';
                include('vues/autrespieces.php');
                include ('controleurs/accueilmaison_LU.php');
                break;
        }
    } else {
        include('vues/erreur404.php');
    }
}


elseif($status == 'LU' && isset($_GET['id']) && isset($_GET['idroom']) && isset($_GET['roomchoice'])){
    $devices = getDataFromRoomId($bdd,$_GET['roomchoice']);
    include('vues/roomeffector.php');
}
