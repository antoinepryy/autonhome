<?php

// on récupère les requêtes génériques
include('requetes.generiques.php');

//on définit le nom de la table
$table = "user";

// requêtes spécifiques à la table des capteurs


/**
 * Recherche un utilisateur en fonction du nom passé en paramètre
 * @param PDO $bdd
 * @param string $nom
 * @return array
 */
function rechercheParNom(PDO $bdd, string $nom): array {
    
    $statement = $bdd->prepare('SELECT * FROM  user WHERE username = :username');
    $statement->bindParam(":username", $value);
    $statement->execute();
    
    return $statement->fetchAll();
    
}

function identifyUser(PDO $bdd, $mail, $password){
    $cryptedPassword = password_hash($password, PASSWORD_DEFAULT);
    $statement = $bdd->prepare('SELECT * FROM user WHERE mail = :mail AND password = :password');
    $statement->bindParam(":mail", $mail);
    $statement->bindParam(":password", $cryptedPassword);
    $statement->execute();
    return $statement->fetchAll();

}

function createUser(PDO $bdd, $data){
    $cryptedPassword = $data["password"];
    $cryptedPassword = password_hash($cryptedPassword, PASSWORD_DEFAULT);
    $statement = $bdd->prepare('SELECT * FROM user WHERE mail = :mail AND password = :password');
    $statement->bindParam(":mail", $mail);
    $statement->bindParam(":password", $cryptedPassword);
    $statement->execute();
    return $statement->fetchAll();

}


/**
 * Récupère tous les enregistrements de la table users
 * @param PDO $bdd
 * @return array
 */
function recupereTousUtilisateurs(PDO $bdd): array {
    $query = 'SELECT * FROM user';
    return $bdd->query($query)->fetchAll();
}

?>