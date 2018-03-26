<?php 
/**
* Vue : liste des utilisateurs inscrits
*/
?>

<p><?php echo $entete; ?></p>

<table>
	<thead>
		<tr>

			<th>Nom</th>
			<th>Mot de passe crypté</th>
		</tr>
	</thead>
	<tbody>	
	
    <?php foreach ($liste as $element) { ?>
    
        <tr>
        		<td>
				<?php echo $element['username']; ?>
            	</td>
        		<td>
        			<?php echo $element['password']; ?>
        		</td>
        	</tr>
    
    <?php } ?>

	</tbody>
</table>


<?php echo AfficheAlerte($alerte); ?>

<p>
	<a href="index.php">Retour</a>
</p>