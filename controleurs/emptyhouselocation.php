<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 18/06/2018
 * Time: 10:26
 */

if(!function_exists("importAllSessionsAndModels")){ //Upload auto de toutes les variables de sessions ainsi que des fcts de BDD
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}

if(belongToUser($bdd, $_SESSION['userId'], $_GET['id'])){
    emptyHouse($bdd, $_GET['id']);
    header("Location: index.php?cible=mamaison&id=".$_GET['id']);
}
else{
    include ('vues/erreur404.php');
}