<?php 
/**
* Vue : inscrire un nouvel utilisateur
*/

require ('vues/header.php');
?>

<?php echo AfficheAlerte($alerte); ?>

<form method="POST" action="">
	
	<label>Pseudo :</label>
	<input type="text"  name="username" />
	
	<label>Mot de passe :</label>
	<input type="password"  name="password"  />

    <label>Téléphone :</label>
    <input type="tel"  name="telephone"  />

    <button type="submit" name="submit">S'inscrire</button>

</form>

<p><a href="index.php">Retour</a></p>

<?php

require ('vues/footer.php');
?>