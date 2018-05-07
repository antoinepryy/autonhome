<?php

require ('vues/header_'.$status.'.php');
?>


<form method="post" action="">
	
	<label for="roomname">Nom de la pièce:</label>
	<input type="text"  name="roomname" id="roomname" placeholder="Ex : Chambre de Pierre" />
	
	<label for="roomtype">Type de la pièce: </label> <br />
	<select name="'roomtype" id="roomtype">
        <option value="chambre">Chambre</option>
        <option value="cuisine">Cuisine</option>
        <option value="salon">Salon</option>
        <option value="salleamanger">Salle à manger</option>
        <option value="salledebain">Salle de bain</option>
        <option value="autrespieces">Autres pièces</option>

    <input type="submit" value="Submit">

</form>

<p><a href="index.php?cible=capteurs">Retour</a> | <a href="index.php">Accueil</a></p>

<?php

require ('vues/footer.php');
?>