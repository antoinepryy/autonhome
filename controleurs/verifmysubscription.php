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
            if ($_POST['choixPackAbonnement'] == 'packUneMaison') {
                $data=array(
                    'ID=>NULL',
                    'id_subscription'=>1,
<<<<<<< HEAD
                    //'beginningDate'=>NULL,
                    //'endingDate'=>NULL,
                    'id_user'=>$_SESSION['userId']);

=======
                    'id_user'=>$_SESSION['userId']);
>>>>>>> 294b403682478e0e110ba4e3b8a0695881b36fdc
                createSubscription($bdd, $data);
                header("Location: index.php?cible=monabonnement");
<<<<<<< HEAD
                //require('vues/monabonnement.php');
=======
>>>>>>> 294b403682478e0e110ba4e3b8a0695881b36fdc
            }
            else{

                header("Location: index.php?cible=AbonnementPlusieursMaisons");
<<<<<<< HEAD
                //require('vues/AbonnementPlusieursMaisons.php');
=======
>>>>>>> 294b403682478e0e110ba4e3b8a0695881b36fdc
            }
        }
    }

else{
    $status="UU";
}




// faire un insert id dans user if il clique sur abonnement


}
// faire un insert id dans user if il clique sur abonnement


?>
