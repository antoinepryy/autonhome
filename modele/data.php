<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 14/06/2018
 * Time: 10:17
 */


function getLastData($bdd){
    $statement = $bdd->prepare('SELECT * FROM data ORDER BY id DESC LIMIT 1');
    $statement->execute();
    return $statement->fetch();

}