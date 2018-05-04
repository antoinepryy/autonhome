<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 04/05/2018
 * Time: 16:55
 */
$section='accueil';
session_start();
include ('sessions/user.php');

session_destroy();

$status = "UU";
include ('./vues/accueil.php');



