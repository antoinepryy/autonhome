<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:31
 */
session_start();
include('./modele/house.php');
if(isset($_POST["houseName"]) && isset($_POST["Surface"])){
    if (createHouse($bdd, $_POST)){
        $section = 'mamaisonprincipale';
        include('vues/MaMaisonPrincipale.php');
    }
    else{
        $section='ajouterunemaison';
        $alerte='Cette maison existe déjà !';
        include ('vues/ajouterunemaison.php');
    }
}
else{
    require ('erreur404.php');
}

