<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 15/05/2018
 * Time: 11:01
 */

include('connexion.php');
//on définit le nom de la table
$table = "forum_topic";

function createSubject(PDO $bdd, $data)
{
    die(var_dump($_SESSION));
    $time = time();
    $statement = $bdd->prepare('INSERT INTO `forum_topic` 
    (`ID`,
    `topic`, 
    `id_user`,
    `dateTime`)
    VALUES
    (NULL,
    :topic, 
    :id_user,
    :dateTime)
    ');
    $statement->bindParam(":topic", $data["topic"]);
    $statement->bindParam(":id_user", $_SESSION['userId']);
    $statement->bindParam(":dateTime", $time);
    $statement->execute();
}
