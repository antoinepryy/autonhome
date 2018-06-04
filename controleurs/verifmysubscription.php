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

if(isLoggedAsAdmin()){
    $status="AD";
}
elseif (isLoggedAsUser()){
    $status="LU";
    if(isset($_POST)) {
            if ($_POST['choixPackAbonnement'] == 'packUneMaison') {
                $data=array(
                    'ID=>NULL',
                    'id_subscription'=>1,
                    'id_user'=>$_SESSION['userId']);
                createSubscription($bdd, $data);
                header("Location: index.php?cible=monabonnement");
            }
            else{
                $data=array(
                    'ID=>NULL',
                    'id_subscription'=>2,
                    'id_user'=>$_SESSION['userId']);
                createSubscription($bdd, $data);
                header("Location: index.php?cible=monabonnement");
            }
        }
    }

else{
    $status="UU";
}

?>
