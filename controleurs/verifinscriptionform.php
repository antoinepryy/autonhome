<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:31
 */

include('./modele/requetes.utilisateurs.php');
if(isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["firstName"]) && isset($_POST["lastName"])){
    die(var_dump('bueno'));

}

else{
    die(var_dump($_POST));
}

$section = 'accueil';
include('vues/accueil.php');