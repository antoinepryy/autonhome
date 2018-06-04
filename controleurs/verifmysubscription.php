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

<<<<<<< HEAD

if(isset($_POST)) {


=======
>>>>>>> 8a437de1d523a2801c79bf95b58451436648d190
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
<<<<<<< HEAD

                header("Location: index.php?cible=AbonnementPlusieursMaisons");

=======
                $data=array(
                    'ID=>NULL',
                    'id_subscription'=>2,
                    'id_user'=>$_SESSION['userId']);
                createSubscription($bdd, $data);
                header("Location: index.php?cible=monabonnement");
>>>>>>> 8a437de1d523a2801c79bf95b58451436648d190
            }
        }
    }

else{
    $status="UU";
}
?>
