<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 15/05/2018
 * Time: 11:01
 */

include('connexion.php');
//on définit le nom de la table
$table = "forummessage";


function answerDiscussion(PDO $bdd, $text, $id_discussion)
{
    $time = date('Y-m-d H:i:s');
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

function getMessages(PDO $bdd) {
    $statement = $bdd->prepare('SELECT id_user, dateTime, text FROM forum_message WHERE id_discussion= id_user');
    $statement->bindParam(":id_user", $_GET['ID']);
    $statement->execute();
    $message = $statement->fetchAll();;
    return (array($message));
}

function get(PDO $bdd) {
    $query = 'SELECT id_user, dateTime, text FROM forum_message WHERE id_discussion= 1';
    return $bdd->query($query)->fetchAll();
}

