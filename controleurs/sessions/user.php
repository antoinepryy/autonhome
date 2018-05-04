<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 04/05/2018
 * Time: 11:57
 */

require('start.php');

function auth($data){
    $_SESSION["userId"] = $data["ID"];
    $_SESSION["userMail"] = $data["mail"];
    $_SESSION["userFirstName"] = $data["firstName"];
    $_SESSION["userLastName"] = $_SESSION["lastName"];
}