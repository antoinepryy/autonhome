<?php
include('generics.php');
//on définit le nom de la table
$table = "residence";

function createHouse(PDO $bdd, $data)
{
    $hashCode = bin2hex(uniqid());
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
    :secret,
    :addressNumber, 
    :addressStreet, 
    :addressZipCode, 
    :addressCity, 
    :addressCountry, 
    :idOwner,
    NULL )');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":surface", $data["surface"]);
    $statement->bindParam(":nbPeople", $data["nbPeople"]);
    $statement->bindParam(":secret", $hashCode);
    $statement->bindParam(":addressNumber", $data["addressNumber"]);
    $statement->bindParam(":addressStreet", $data["addressStreet"]);
    $statement->bindParam(":addressZipCode", $data["addressZipCode"]);
    $statement->bindParam(":addressCity", $data["addressCity"]);
    $statement->bindParam(":addressCountry", $data["addressCountry"]);
    $statement->bindParam(":idOwner", $_SESSION["userId"]);
    $statement->execute();
}

function linkRenter($bdd, $hashCode){
    $statement = $bdd->prepare('SELECT * FROM  residence WHERE secret = :secret');
    $statement->bindParam(":secret", $hashCode);
    $statement->execute();
    $foundResidence = $statement->fetch();
    $statement = $bdd->prepare('UPDATE residence
        SET 
        id_tenant = :idTenant
        WHERE id = :residenceId');
    $statement->bindParam(":idTenant", $_SESSION["userId"]);
    $statement->bindParam(":residenceId",$foundResidence["ID"]);
    $statement->execute;
}

function getAllHouses($bdd){
    $statement = $bdd->prepare('SELECT * FROM residence');
    $statement->execute();
    $houses = $statement->fetchAll();
    return $houses;
}

