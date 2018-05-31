<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 29/05/2018
 * Time: 11:27
 */



/*
function findUserByIdInSubscription($bdd, $id)
{
    $statement = $bdd->prepare('SELECT * FROM subscription_user WHERE ID = :id ');
    $statement->BindParam(':id', $id);
    $statement->execute();
    $subscriptionUser = $statement->fetch();
    return $subscriptionUser;
}
*/

function insertIdSubscription($bdd, $ID, $id_subscription ){
    $req = $bdd->prepare('INSERT INTO subscription_user(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
}
$req->execute(array(
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires
	));

echo 'Le jeu a bien été ajouté !';
?>
<?php
function insertIdSubscription($bdd, $ID, $id_subscription ){

    $statement = $bdd->prepare(
        'UPDATE user_subscription 
                SET
                id_subscription = :id_subscription 
                WHERE ID = :id '
    );

    /*
    $statement->execute(array(
        'password' => $password,
        'ID' => $ID)
    ); */

    $statement->BindParam(':id', $ID);
    $statement->BindParam(':id_subscription', $id_subscription);

    $statement->execute();
}




?>