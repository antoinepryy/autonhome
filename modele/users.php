<?php

include('connexion.php');
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

    function createUser(PDO $bdd, $data){                                                        // $data (table en paramètre)
        $verify = $bdd->prepare('SELECT * FROM user WHERE mail = :mail');               // preparer la requete SQL
        $verify->bindParam(":mail", $data["mail"]);                            //
        $verify->execute();                                                                     // lancer la requete
        $newUserVerif = $verify->fetch();                                                       // récuperer la requete SQL
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

        $statement = $bdd -> prepare(
        'UPDATE user
        SET 
        firstName = :firstName,
        lastName = :lastName,
        mail = :mail,
        phoneNumber = :phoneNumber,
        addressNumber = :addressNumber,
        addressStreet = :addressStreet,
        addressZipCode = :addressZipCode,
        addressCity = :addressCity
        WHERE id = :userId '
        );
        $statement->bindParam(":firstName", $data["firstName"]);
        $statement->bindParam(":lastName", $data["lastName"]);
        $statement->bindParam(":mail", $data["mail"]);
        $statement->bindParam(":phoneNumber", $data["phoneNumber"]);
        $statement->bindParam(":addressNumber", $data["addressNumber"]);
        $statement->bindParam(":addressStreet", $data["addressStreet"]);
        $statement->bindParam(":addressZipCode", $data["addressZipCode"]);
        $statement->bindParam(":addressCity", $data["addressCity"]);
        $statement->bindParam(":userId", $_SESSION["userId"]);
        $statement->execute();
        modify($data["mail"],
        $data["firstName"],
        $data["lastName"],
        $data["phoneNumber"],
        $data["addressNumber"],
        $data["addressStreet"],
        $data["addressZipCode"],
        $data["addressCity"]);

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

    function findUserById($bdd, $id){
        $statement = $bdd->prepare('SELECT * FROM user WHERE ID = :id ');
        $statement->BindParam(':id', $id);
        $statement->execute();
        $user = $statement->fetch();
        return $user;
    }



    function updatePassword($bdd, $ID, $password){

        $statement = $bdd->prepare(
            'UPDATE user 
            SET
            password = :password 
            WHERE ID = :id '
        );

        /*
        $statement->execute(array(
            'password' => $password,
            'ID' => $ID)
        ); */

        $statement->BindParam(':id', $ID);
        $statement->BindParam(':password', $password);

        $statement->execute();
    }

?>