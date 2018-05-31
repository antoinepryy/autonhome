<?php
/**
 * Created by IntelliJ IDEA.
<<<<<<< HEAD
 * User: Utilisateur
 * Date: 28/05/2018
 * Time: 14:17
 */



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


$infoUserAbonnement = findUserByIdInSubscription($bdd, $_SESSION['userId']);


// faire un insert id dans user if il clique sur abonnement
if(isset($_POST)){
    if($_POST['choixPackAbonnement']=='packUneMaison'){
    header("Location: index.php?cible=monabonnement");
    }

    else($_POST['choixPackAbonnement']=='packPlusieursMaison'){
        header("Location: index.php?cible=monabonnement")
    };






}



    /*


    if($_POST['choixPackAbonnement']=='packUneMaison'){
        subscription_user['id_subscription'] = 1;


    }

    else ($_POST['choixPackAbonnement']=='packUneMaison'){

    }

};
*/
header("Location: index.php?cible=......");
?>

if(isset($_POST["choixPackAbonnement"] ) ){
//PackuneMaison
//PackplusieursMaison
};

