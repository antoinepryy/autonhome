<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:31
 */

include('./modele/users.php');
if(isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["firstName"]) && isset($_POST["lastName"])){
    createUser($bdd, $_POST);

}

else{
    require ('erreur404.php');
}

$section = 'accueil';
include('vues/accueil.php');