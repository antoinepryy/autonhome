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
    $users = findAllUsers($bdd);
    $array = array();
    $cryptedPassword = password_hash($password, PASSWORD_DEFAULT);
//    $statement = $bdd->prepare('SELECT * FROM user
//    WHERE mail = :mail
//    AND password = :password'
//    );
//    $statement->bindParam(":mail", $mail);
//    $statement->bindParam(":password", $password);
//    $statement->execute();
    foreach ($users as $user){
        array_push($array, $user["password"]);



    }
    die(var_dump($array));
    die(var_dump($statement->fetchAll()["password"]));
    return $statement->fetchAll();

}

    function createUser(PDO $bdd, $data)
    {
        $cryptedPassword = $data["password"];
        $cryptedPassword = password_hash($cryptedPassword, PASSWORD_DEFAULT);
        $statement = $bdd->prepare('INSERT INTO user 
        (`ID`, `firstName`, `lastName`, `mail`, `password`, `phoneNumber`, `addressNumber`, `addressStreet`, `addressZipCode`, `addressCity`, `addressCountry`, `type`, `id_subscription`) 
        VALUES 
        (NULL, 
        :firstName, 
        :lastName, 
        :mail, 
        :password, 
        :phoneNumber, 
        :addressNumber, 
        :addressStreet, 
        :addressZipCode, 
        :addressCity, 
        :addressCountry, 
        "user" , 
        NULL)');
        $statement->bindParam(":firstName", $data["firstName"]);
        $statement->bindParam(":lastName", $data["lastName"]);
        $statement->bindParam(":mail", $data["mail"]);
        $statement->bindParam(":password", $cryptedPassword);
        $statement->bindParam(":phoneNumber", $data["phoneNumber"]);
        $statement->bindParam(":addressNumber", $data["addressNumber"]);
        $statement->bindParam(":addressStreet", $data["addressStreet"]);
        $statement->bindParam(":addressZipCode", $data["addressZipCode"]);
        $statement->bindParam(":addressCity", $data["addressCity"]);
        $statement->bindParam(":addressCountry", $data["addressCountry"]);
        $statement->execute();

    }


    /**
     * Récupère tous les enregistrements de la table users
     * @param PDO $bdd
     * @return array
     */
    function findAllUsers(PDO $bdd): array
    {
        $query = 'SELECT * FROM user';
        return $bdd->query($query)->fetchAll();
    }

?>