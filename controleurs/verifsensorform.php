<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 11/06/2018
 * Time: 17:46
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

var_dump($_POST['cardNumber'.$_GET['idsensor']],$_POST['objectNumber'.$_GET['idsensor']],$_GET['idsensor']);

if (isset($_GET['idsensor'],$_POST['cardNumber'.$_GET['idsensor']],$_POST['objectNumber'.$_GET['idsensor']])){

    $data = array(
        'id' => $_GET['idsensor'],
        'cardnumber' => $_POST['cardNumber'.$_GET['idsensor']],
        'objectnumber' => $_POST['objectNumber'.$_GET['idsensor']],
    );
    updateSocketSensor($bdd,$data);
    header("Location: index.php?cible=inspectdatabase&table=sensor");
}


