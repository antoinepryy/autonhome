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
    if(isset($_POST)) {
        $section = 'monabonnement';
            if ($_POST['choixPackAbonnement'] == 'packUneMaison') {
                $data = array(
                    'ID' => NULL,
                    'id_subscription' => 1,
                    'id_user' => $_SESSION['id'],
                    'beginningDate' => NULL,
                    'endingDate' => NULL,);
                createSubscription($bdd,$date);
                header("Location: index.php?cible=monabonnement");
            }
            else{
                $data = array(
                    'ID' => NULL,
                    'id_subscription' => 2,
                    'id_user' => $_SESSION['id'],
                    'beginningDate' => NULL,
                    'endingDate' => NULL,);
                createSubscription($bdd,$date);
                header("Location: index.php?cible=monabonnement");
            }
        }
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
