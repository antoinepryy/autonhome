<?php
/**
* Vue : ajouter un capteur
*/
?>

<?php echo AfficheAlerte($alerte); ?>

<form method="POST" action="">
	
	<label>Nom :</label>
	<input type="text"  name="name" />
	
	<label>Type :</label>
	<input type="text"  name="type" />

    <button type="submit" name="submit">Ajouter</button>

</form>

<p><a href="index.php?cible=capteurs">Retour</a> | <a href="index.php">Accueil</a></p>