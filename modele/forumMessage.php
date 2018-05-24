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


function createMessage(PDO $bdd, $text, $id_discussion)
{
    $time = time();
    $statement = $bdd->prepare('INSERT INTO `forum_message` 
    (`ID`,
    `text`, 
    `id_user`,
    `id_discussion`,
    `dateTime`)
    VALUES
    (NULL,
    :text, 
    :id_user,
    :id_discussion,
    :dateTime)');
    $statement->bindParam(":text", $text);
    $statement->bindParam(":id_user", $_SESSION['userId']);
    $statement->bindParam(":id_discussion", $id_discussion);
    $statement->bindParam(":dateTime", $time);
    $statement->execute();
}

function messageParTopic(PDO $bdd, $id_topic) {

    $statement = $bdd->prepare('SELECT text FROM  forum_message WHERE id_topic = :id_topic ORDER BY dateTime DESC');
    $statement->bindParam(":id_topic", $id_topic);
    $statement->execute();

    return $statement->fetchAll();

}