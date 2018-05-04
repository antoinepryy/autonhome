<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 16/04/2018
 * Time: 18:40
 */
$section = 'accueil';
require ('sessions/user.php');

auth(array(
    'mail' => 'test',
    'firstName' => 'test',
    'lastName' => 'test',
    'ID' => 23,
));

include('vues/accueil.php');
