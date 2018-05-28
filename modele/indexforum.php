<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 28/05/2018
 * Time: 14:29
 */

include('connexion.php');

function afficheNom(PDO $bdd) {
    $statement = $bdd->prepare('SELECT user.firstName, user.lastName FROM user INNER JOIN forum_discussion ON user.ID = forum_dicussion.id_user');
    $statement->execute();
    $nom = $statement->fetch();
    return ($nom);
}