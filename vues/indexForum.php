/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 11/05/2018
 * Time: 10:59
 */

<html>
<head>
<title>Index de notre forum</title>
</head>
<body>

<!-- on place un lien permettant d'accéder à la page contenant le formulaire d'insertion d'un nouveau sujet -->
<a href="./forum_inserer_sujet.php">Insérer un sujet</a>

<br /><br />

<?php
// on se connecte à notre base de données
$bdd = new PDO('mysql:host=localhost:3306;dbname=mvc;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// préparation de la requete
$sql = 'SELECT ID, topic, id_user, dateTime,id_category FROM forum_topic ORDER BY dateTime DESC';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqli_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());



// on ferme la connexion à la base de données.

?>
</body>
</html>