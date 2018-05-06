<?php


include("modele/connexion.php");

//on définit le nom de la table
$table = "residence";

function createHouse(PDO $bdd, $data)
{
        $statement = $bdd->prepare('INSERT INTO user 
        (`ID`,
        `houseName`,
        `Surface`,
        `NumberOfPeople`,
        `secret`, 
        `addressHouseNumber`, 
        `addressHouseStreet`, 
        `addressHouseZipCode`, `addressHouseCity`, 
        `addressHouseCountry`, 
        `type`, 
        `id_owner`
        `id_tenant`) 
        VALUES 
        (NULL,
        :houseName, 
        :Surface, 
        :NumberOfPeople, 
        :secret, 
        :addressHouseNumber, 
        :addressHouseStreet, 
        :addressHouseZipCode, 
        :addressHouseCity, 
        :addressHouseCountry, 
        "house" , 
        NULL
        NULL)');
    $statement->bindParam(":houseName", $data["houseName"]);
    $statement->bindParam(":Surface", $data["Surface"]);
    $statement->bindParam(":NumberOfPeople", $data["numberOfRoom"]);
    $statement->bindParam(":secret", $data["NumberOfPeople"]);
    $statement->bindParam(":addressHouseNumber", $data["addressHouseNumber"]);
    $statement->bindParam(":addressHouseStreet", $data["addressHouseStreet"]);
    $statement->bindParam(":addressHouseZipCode", $data["addressHouseZipCode"]);
    $statement->bindParam(":addressHouseCity", $data["addressHouseCity"]);
    $statement->bindParam(":addressHouseCountry", $data["addressHouseCountry"]);
    $statement->execute();

}

