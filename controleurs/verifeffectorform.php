<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 12/06/2018
 * Time: 12:36
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

var_dump($_POST['cardNumber'.$_GET['ideffector']],$_POST['objectNumber'.$_GET['ideffector']],$_GET['ideffector']);

if (isset($_GET['ideffector'],$_POST['cardNumber'.$_GET['ideffector']],$_POST['objectNumber'.$_GET['ideffector']])){

    $data = array(
        'id' => $_GET['ideffector'],
        'cardnumber' => $_POST['cardNumber'.$_GET['ideffector']],
        'objectnumber' => $_POST['objectNumber'.$_GET['ideffector']],
    );
    updateSocketEffector($bdd,$data);
    header("Location: index.php?cible=inspectdatabase&table=effector");
}


