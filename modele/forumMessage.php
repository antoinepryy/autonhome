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

function getInfos(PDO $bdd, $id_topic){
    $statement = $bdd->prepare('SELECT firstName, lastName, dateTime, topic, text FROM forum_discussion JOIN user ON user.ID = forum_discussion.id_user WHERE forum_discussion.ID = :id_topic');
    $statement ->bindParam(":id_topic", $id_topic);
    $statement -> execute();
    $infos = $statement->fetchAll();
    return ($infos);

}

function getMessages(PDO $bdd,$id_discussion ) {
    $statement = $bdd->prepare('SELECT firstName, lastName, forum_message.dateTime, forum_message.text FROM forum_message INNER JOIN forum_discussion ON forum_discussion.ID = forum_message.id_discussion INNER JOIN user ON user.ID = forum_message.id_user WHERE forum_discussion.ID = :id_discussion');
    $statement ->bindParam(":id_discussion", $id_discussion);
    $statement->execute();
    $messages = $statement->fetchAll();;
    return ($messages);
}

