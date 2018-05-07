<?php
include('generics.php');
//on définit le nom de la table
$table = "residence";

function createHouse(PDO $bdd, $data)
{

        $statement = $bdd->prepare('INSERT INTO `residence` 
        (`ID`, 
        `name`, 
        `surface`, 
        `nbPeople`, 
        `secret`, 
        `addressNumber`, 
        `addressStreet`, 
        `addressZipCode`, 
        `addressCity`, 
        `addressCountry`, 
        `id_owner`, 
        `id_tenant`) 
        VALUES
        (NULL,
        :name, 
        :surface, 
        :nbPeople,
        :secret;
        :addressNumber, 
        :addressStreet, 
        :addressZipCode, 
        :addressCity, 
        :addressCountry, 
        :idOwner,
        NULL)');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":surface", $data["surface"]);
    $statement->bindParam(":nbPeople", $data["nbPeople"]);
    $hashCode = "codeSecret";
    $statement->bindParam(":secret", $hashCode);
    $statement->bindParam(":addressNumber", $data["addressNumber"]);
    $statement->bindParam(":addressStreet", $data["addressStreet"]);
    $statement->bindParam(":addressZipCode", $data["addressZipCode"]);
    $statement->bindParam(":addressCity", $data["addressCity"]);
    $statement->bindParam(":addressCountry", $data["addressCountry"]);
    $statement->bindParam(":idOwner", $_SESSION["userId"]);
    $statement->execute();
    die(var_dump('maison créée'));
}

