<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 29/05/2018
 * Time: 11:27
 */




function findUserByIdInSubscription($bdd, $id)
{
    $statement = $bdd->prepare('SELECT * FROM subscription_user WHERE ID = :id ');
    $statement->BindParam(':id', $id);
    $statement->execute();
    $subscriptionUser = $statement->fetch();
    return $subscriptionUser;
}




function joinIdSubscription(PDO $bdd){
    $statement = $bdd->prepare('SELECT subscription_user.id_subscription, subscription.ID FROM subscription_user INNER JOIN subscription ON subscription_user.id_subscription = subscription.id_subscription ');
    $statement->execute();
    $idSubscriptionUser = $statement ->fetchAll();
    return $idSubscriptionUser;
}


function joinIdUserSubscription(PDO $bdd){
    $statement = $bdd->prepare('SELECT user.ID FROM subscription_user INNER JOIN user ON subscription_user.id_user = user.ID ');
    $statement->execute();
    $iduserSubscription = $statement ->fetchAll();
    return $iduserSubscription;

}


function createSubsciption(PDO $bdd){

}




/*
function insertIdSubscription($bdd, $ID, $id_subscription ){

    $statement = $bdd->prepare(
        'UPDATE user_subscription 
                SET
                id_subscription = :id_subscription 
                WHERE ID = :id '
    );

    // ---------------
    $statement->execute(array(
        'password' => $password,
        'ID' => $ID)
    );

    // ---------------

    $statement->BindParam(':id', $ID);
    $statement->BindParam(':id_subscription', $id_subscription);

    $statement->execute();
}

*/


?>