<?php 
/**
 * Vue : chercher des capteurs par leur type
 */
?>


<form method="POST" action="">
	
	<label>Type de capteur :</label>
	<input type="text"  name="type" />

    <button type="submit" name="submit">Chercher</button>

</form>

<?php  if(!empty($liste)) { ?>
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
<?php } ?>


<?php echo AfficheAlerte($alerte); ?>


<p><a href="index.php?cible=capteurs">Retour</a> | <a href="index.php">Accueil</a></p>
