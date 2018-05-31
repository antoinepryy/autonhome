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



$infoUserAbonnement = findUserByIdInSubscription($bdd, $_SESSION['userId']);



if(isset($_POST)) {

    joinIdSubscription;
    header("Location: index.php?cible=monabonnement");

// faire un insert id dans user if il clique sur abonnement

}
// faire un insert id dans user if il clique sur abonnement

if(isset($_POST)) {

    $section = 'monabonnement';
    $status;

    $status;
    if (isLoggedAsAdmin()) {
        $status = "AD";
    } elseif (isLoggedAsUser()) {
        $status = "LU";
        updateUser($bdd, $_POST);
        header("Location: index.php?cible=monabonnement");


    } else {
        require('erreur404.php');
    }

}
?>

header("Location: index.php?cible=monabonnement");


