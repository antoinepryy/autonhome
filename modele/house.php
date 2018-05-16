<?php
include('connexion.php');
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
    $statement = $bdd->prepare('SELECT * FROM  residence WHERE secret = :secret AND id_owner != :idSession');
    $statement->bindParam(":idSession", $_SESSION['userId']);
    $statement->bindParam(":secret", $hashCode);
    $statement->execute();
    $foundResidence = $statement->fetch();
    if ($foundResidence){
        $statement = $bdd->prepare('UPDATE residence SET 
        id_tenant = :idTenant
        WHERE 
        id = :residenceId');
        $statement->bindParam(":idTenant", $_SESSION["userId"]);
        $statement->bindParam(":residenceId",$foundResidence["ID"]);
        $statement->execute();
        return true;
    }
    else{
        $alerte = "Impossible d'être locataire de cette maison";
    }


}

function getAllHouses($bdd)
{
    $statement = $bdd->prepare('SELECT * FROM residence');
    $statement->execute();
    $houses = $statement->fetchAll();
    return $houses;
}

function getAllUserHouses($bdd, $id){
    $ownStatement = $bdd->prepare('SELECT * FROM residence WHERE id_owner = :idOwn');
    $rentStatement = $bdd->prepare('SELECT * FROM residence WHERE id_tenant = :idRent');
    $ownStatement->bindParam(':idOwn', $id);
    $rentStatement->bindParam('idRent', $id);
    $ownStatement->execute();
    $rentStatement->execute();
    $owned = $ownStatement->fetchAll();
    $rented = $rentStatement->fetchAll();
    return (array($owned, $rented));
}

function getHouseInfoFromId($bdd, $id){
    $statement = $bdd->prepare('SELECT name, surface, nbPeople, addressNumber, addressStreet, addressZipCode, addressCity, addressCountry, id_tenant, secret FROM residence WHERE ID = :ID');
    $statement->bindParam(':ID', $id);
    $statement->execute();
    return $statement->fetch();
}
