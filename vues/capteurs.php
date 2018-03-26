<?php 
/**
* Vue : liste des capteurs déjà enregistrés
*/
?>

<p><?php echo $entete; ?></p>


<table>
	<thead>
		<tr>

			<th>Nom</th>
			<th>Type</th>
		</tr>
	</thead>
	<tbody>	
	
    <?php foreach ($liste as $element) { ?>
    
        <tr>
        		<td>
				<?php echo $element['name']; ?>
            	</td>
        		<td>
        			<?php echo $element['type']; ?>
        		</td>
        	</tr>
    
    <?php } ?>

	</tbody>
</table>


<?php echo AfficheAlerte($alerte); ?>


<p><a href="index.php?cible=capteurs&fonction=ajout">Ajouter un capteur</a> | <a href="index.php?cible=capteurs&fonction=recherche">Chercher des capteurs</a> | <a href="index.php">Accueil</a></p>
