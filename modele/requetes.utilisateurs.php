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
    $statement = $bdd->prepare('SELECT * FROM user 
    WHERE mail = :mail 
    AND password = :password'
    );
    $statement->bindParam(":mail", $mail);
    $statement->bindParam(":password", $password);
    $statement->execute();
    die(var_dump($statement->fetchAll()));
    return $statement->fetchAll();

}

function createTestUser(PDO $bdd, $data){
    $cryptedPassword = $data["password"];
    $cryptedPassword = password_hash($cryptedPassword, PASSWORD_DEFAULT);
    $statement = $bdd->prepare(
        'INSERT INTO user VALUES 
        (:firstName,
        :lastName,
        :mail,
        :password
    )');
    $statement->bindParam(":firstName", $data["firstName"]);
    $statement->bindParam(":lastName", $data["lastName"]);
    $statement->bindParam(":mail", $data["mail"]);
    $statement->bindParam(":password", $data["password"]);
    $statement->execute();
    return $statement->fetchAll();



function createUser(PDO $bdd, $data){
    $cryptedPassword = $data["password"];
    $cryptedPassword = password_hash($cryptedPassword, PASSWORD_DEFAULT);
    $statement = $bdd->prepare(
        'INSERT INTO user VALUES 
        (:firstName,
        :lastName,
        :mail,
        :password,
        :phoneNumber,
        :addressNumber,
        :addressStreet,
        :addressZipCode,
        :addressCity,
        :addressCountry,
        :type)');
    $statement->bindParam(":firstName", $data["firstName"]);
    $statement->bindParam(":lastName", $data["lastName"]);
    $statement->bindParam(":mail", $data["mail"]);
    $statement->bindParam(":password", $data["password"]);
    $statement->bindParam(":phoneNumber", $data["phoneNumber"]);
    $statement->bindParam(":addressNumber", $data["addressNumber"]);
    $statement->bindParam(":addressStreet", $data["addressStreet"]);
    $statement->bindParam(":addressZipCode", $data["addressZipCode"]);
    $statement->bindParam(":addressCity", $data["addressCity"]);
    $statement->bindParam(":addressContry", $data["addressCountry"]);
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