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

function afficheNom(PDO $bdd) {
    $statement = $bdd->prepare('
    SELECT 
    user.firstName, 
    user.lastName 
    FROM user INNER JOIN 
    forum_discussion
    ON 
    user.ID = forum_discussion.id_user');
    $statement->execute();
    $nom = $statement->fetch();
    return ($nom);
}



