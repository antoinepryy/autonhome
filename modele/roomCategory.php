<?php

include('connexion.php');
//on définit le nom de la table
$table = "room_category" ;


function getIdRoomCategory($bdd, $name){
    $statement = $bdd->prepare('SELECT ID FROM room_category WHERE name = :name');
    $statement->bindParam(':name', $name);
    $statement->execute();
    return $statement->fetch();
}

function getIDRoomCatego($bdd,$idroom){
    $statement = $bdd->prepare('SELECT id_roomCategory FROM room WHERE ID = :ID');
    $statement->bindParam(':ID',$idroom);
    $statement->execute();
    return $statement->fetch();
}

?>