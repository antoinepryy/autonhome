<?php

// on récupère les requêtes génériques
include('generics.php');

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

function identifyUserDatabase(PDO $bdd, $mail, $password){
    $statement = $bdd->prepare('SELECT * FROM  user WHERE mail = :mail');
    $statement->bindParam(":mail", $mail);
    $statement->execute();
    $foundUser = $statement->fetch();
    $var = password_verify($password, $foundUser["password"]);
    if($var==true) {
        return $foundUser;
    }
    else{
        return NULL;
    }
}

    function createUser(PDO $bdd, $data)
    {
        $verify = $bdd->prepare('SELECT * FROM user WHERE mail = :mail');
        $verify->bindParam(":mail", $data["mail"]);
        $verify->execute();
        $newUserVerif = $verify->fetch();
        if ($newUserVerif==false){
            $cryptedPassword = $data["password"];
            $cryptedPassword = password_hash($cryptedPassword, PASSWORD_DEFAULT);
            $statement = $bdd->prepare('INSERT INTO user 
            (`ID`, 
            `firstName`, 
            `lastName`, 
            `mail`, 
            `password`, 
            `phoneNumber`, 
            `addressNumber`, 
            `addressStreet`, 
            `addressZipCode`, 
            `addressCity`, 
            `addressCountry`, 
            `type`, 
            `id_subscription`) 
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
            return true;

        }
        else{
            return false;
        }


    }

    function updateUser($bdd, $data){
        $verify = $bdd->prepare('SELECT * FROM user WHERE mail = :mail');
        $verify->bindParam(":mail", $data["mail"]);
        $verify->execute();
        $oldUserData = $verify->fetch();
        if ($oldUserData==false){
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
            return true;

        }
        else{
            return false;
        }

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