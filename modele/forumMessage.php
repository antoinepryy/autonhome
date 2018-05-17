<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 15/05/2018
 * Time: 11:01
 */

include('connexion.php');
//on définit le nom de la table
$table = "forum_message";


function createMessage(PDO $bdd, $data)
{
    $time = time();
    $statement = $bdd->prepare('INSERT INTO `forum_topic` 
    (`ID`,
    `text`, 
    `id_user`,
    `id_topic`,
    `dateTime`)
    VALUES
    (NULL,
    :text, 
    :id_user,
    :id_topic,
    :dateTime)');
    $statement->bindParam(":text", $data["text"]);
    $statement->bindParam(":id_user", $_SESSION['userId']);
    $statement->bindParam(":id_topic", $_SESSION['id_topic']);
    $statement->bindParam(":dateTime", $time);
    $statement->execute();
}