<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 10:48
 */

include('./modele/requetes.utilisateurs.php');
$array = recupereTousUtilisateurs($bdd);

die(var_dump($array));

$section = 'inscription';
include('vues/inscription.php');