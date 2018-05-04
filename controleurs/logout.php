<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 04/05/2018
 * Time: 16:55
 */

include ('sessions/general.php');
startSession();
include ('sessions/user.php');

session_destroy();

include ('./vues/accueil.php');