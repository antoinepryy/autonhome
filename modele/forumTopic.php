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
    $statement = $bdd->prepare('INSERT INTO `forum_topic` 
    (`ID`,
    `topic`, 
    `id_user`,
    `dateTime`
    `id_category`)
    VALUES
    (NULL,
    :topic, 
    :`id_user`
    :dateTime,
    :id_category,)');
    $statement->bindParam(":topic", $data["topic"]);
    $statement->bindParam(":id_user", $data["id_user"]);
    $statement->bindParam(":dateTime", $data["dateTime"]);
    $statement->bindParam(":id_category", $data["id_category"]);
    $statement->execute();
}
