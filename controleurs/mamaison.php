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
        $user = findUserById($bdd, $houseInfo[8]);
        include ('vues/mamaisonmain.php');
    }
    else{
        include ('vues/erreur404.php');
    }

}

if($status=='LU' && isset($_GET['id']) && isset($_GET['idroom'])){
    $section = 'mamaisonroom';
    if(belongToUser($bdd, $_SESSION['userId'], $_GET['id'])){
        switch ($_GET['idroom']){
            case 1:
                $section = 'salon';
                include ('vues/salon.php');
                break;
            case 2 :
                $section = 'cuisine';
                include ('vues/cuisine.php');
                break;
            case 3 :
                $section = 'chambre';
                include ('vues/chambre.php');
                break;
            case 4 :
                $section = 'salleamanger';
                include ('vues/salleamanger.php');
                break;
            case 5 :
                $section = 'salledebain';
                include ('vues/salledebain.php');
                break;
            case 6 :
                $section = 'autrespieces';
                include ('vues/autrespieces.php');
                break;
        }
    }
    else{
        include ('vues/erreur404.php');
    }


}