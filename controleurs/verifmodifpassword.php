<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 18/05/2018
 * Time: 14:33
 */

if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}



$infoUser = findUserById($bdd, $_SESSION['userId']);




if(isset($_POST)){
    if(password_verify($_POST['pass'], $infoUser['password']) AND ($_POST['passNew'] == $_POST['passNewPlain']))
    {

        $cryptedPassword = password_hash($_POST['passNew'], PASSWORD_DEFAULT);
        updatePassword($bdd, $_SESSION['userId'], $cryptedPassword);
    }

}

header("Location: index.php?cible=accueil");

