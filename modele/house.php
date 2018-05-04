<?php

// on récupère les requêtes génériques
include('generics.php');

//on définit le nom de la table
$table = "house";

function createHouse(PDO $bdd, $data)
{
        $statement = $bdd->prepare('INSERT INTO user 
        (`houseName`,`Surface`,`numberOfRoom`,`NumberOfPeople`, `addressHouseNumber`, `addressHouseStreet`, `addressHouseZipCode`, `addressHouseCity`, `addressHouseCountry`, `type`, `id_user`) 
        VALUES 
        (houseName, 
        :Surface, 
        :numberOfRoom, 
        :NumberOfPeople, 
        :addressHouseNumber, 
        :addressHouseStreet, 
        :addressHouseZipCode, 
        :addressHouseCity, 
        :addressHouseCountry, 
        "house" , 
        NULL)');
    $statement->bindParam(":houseName", $data["houseName"]);
    $statement->bindParam(":Surface", $data["Surface"]);
    $statement->bindParam(":numberOfRoom", $data["numberOfRoom"]);
    $statement->bindParam(":NumberOfPeople", $data["NumberOfPeople"]);
    $statement->bindParam(":addressHouseNumber", $data["addressHouseNumber"]);
    $statement->bindParam(":addressHouseStreet", $data["addressHouseStreet"]);
    $statement->bindParam(":addressHouseZipCode", $data["addressHouseZipCode"]);
    $statement->bindParam(":addressHouseCity", $data["addressHouseCity"]);
    $statement->bindParam(":addressHouseCountry", $data["addressHouseCountry"]);
    $statement->execute();

}

?>