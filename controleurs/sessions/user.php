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
    $_SESSION["phoneNumber"] = $data["phoneNumber"];
    $_SESSION["addressNumber"] = $data["addressNumber"];
    $_SESSION["addressStreet"] = $data["addressStreet"];
    $_SESSION["addressZipCode"] = $data["addressZipCode"];
    $_SESSION["addressCity"] = $data["addressCity"];
    $_SESSION["addressCountry"] = $data["addressCountry"];
    $_SESSION["id_subscription"] = $data["id_subscription"];
    $_SESSION["type"] = $data["type"];
}
