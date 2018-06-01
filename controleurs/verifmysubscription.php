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



if(isset($_POST)) {


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

// faire un insert id dans user if il clique sur abonnement


}
// faire un insert id dans user if il clique sur abonnement

if(isset($_POST)) {

    $section = 'monabonnement';
    $status;

    if (isset($_POST)) {

        if ($_POST['choixPackAbonnement'] == 'packUneMaison') {
            header("Location: index.php?cible=monabonnement");

        }

        else
            {
            header("Location: index.php?cible=monabonnement");
        };


    }
    header("Location: index.php?cible=monabonnement");
}
?>
