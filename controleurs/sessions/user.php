<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 04/05/2018
 * Time: 11:57
 */



function authentify($data){
    $_SESSION["userId"] = $data["ID"];
    $_SESSION["userMail"] = $data["mail"];
    $_SESSION["userFirstName"] = $data["firstName"];
    $_SESSION["userLastName"] = $data["lastName"];
    $_SESSION["type"] = $data["type"];
}