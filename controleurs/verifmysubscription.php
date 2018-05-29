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


$infoUserAbonnement = findUserById($bdd, $_SESSION['userId']);

<<<<<<< HEAD
if(isset($_POST)){
    if($_POST['choixPackAbonnement']=='packUneMaison'){


    }

};
?>
=======
if(isset($_POST["choixPackAbonnement"] ) ){
//PackuneMaison
//PackplusieursMaison
};


?>
>>>>>>> 4ee9c90a7377786370e513b3e02d3a09a0550ac7
