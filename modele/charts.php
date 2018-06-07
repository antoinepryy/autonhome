<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 06/06/2018
 * Time: 22:23
 */
include('connexion.php');

function getData(PDO $bdd, $id_sensor)
{
    $statement = $bdd->prepare('SELECT value,dateTime FROM data WHERE id_sensor=:id_sensor');
    $statement->bindParam(":id_sensor", $id_sensor);
    $statement->execute();
    return ($statement->fetchAll());
}
