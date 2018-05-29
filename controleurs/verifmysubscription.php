<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 25/05/2018
 * Time: 15:30
 */

if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$infoUserAbonnement = findUserById($bdd, $_SESSION['userId']);

if(isset($_POST)){
    if($_POST['choixPackAbonnement']=='packUneMaison'){


    }

};
?>
