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

function createDiscussion(PDO $bdd, $topic, $text)
{
    $time = date('Y-m-d H:i:s');
    $statement = $bdd->prepare('INSERT INTO `forum_discussion` 
    (`ID`,
    `topic`, 
    `text`, 
    `id_user`,
    `dateTime`)
    VALUES
    (NULL,
    :topic,
    :text,
    :id_user,
    :dateTime)
    ');
    $statement->bindParam(":topic", $topic);
    $statement->bindParam(":text", $text);
    $statement->bindParam(":id_user", $_SESSION['userId']);
    $statement->bindParam(":dateTime", $time);
    $statement->execute();
}

function orderDiscussions(PDO $bdd){
    $statement = $bdd->prepare('SELECT id_user, dateTime, topic, text  FROM  forum_discussion ORDER BY dateTime DESC');
    $statement->execute();
    return $statement->fetchAll();
}