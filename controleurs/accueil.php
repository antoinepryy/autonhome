<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 16/04/2018
 * Time: 18:40
 */
$section = 'accueil';
include('sessions/general.php');
startSession();
include('sessions/user.php');
include('vues/accueil.php');
