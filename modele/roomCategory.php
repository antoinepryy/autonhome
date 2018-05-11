<?php

include('connexion.php');
//on définit le nom de la table
$table = "room_category" ;






public function getIdRoomCategory($bdd, $name){
    $statement = $bdd->prepare('SELECT id FROM room_category WHERE name = :name');
    $statement->bindParam(':name', $name);
    $statement->execute();
    return  $statement->fetch();

}

?>