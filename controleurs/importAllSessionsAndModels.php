<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 07/05/2018
 * Time: 16:43
 */


function importAllSessionsAndModels(){
    if (!isset($_SESSION)) {
        session_start(); //commence une session si elle n'a pas été activée au préalable
    }
    include('sessions/user.php'); // liste des fichiers à import
    include('./modele/connexion.php');
    include('./modele/generics.php');
    include('./modele/house.php');
    include('./modele/room.php');
    include('./modele/roomCategory.php');
    include('./modele/sensors.php');
    include('./modele/users.php');
    include('./modele/forumMessage.php');
    include('./modele/forumDiscussion.php');

}