<?php 
/**
* Vue : inscrire un nouvel utilisateur
*/

require ('vues/header.php');
require ('vues/CSS/inscription.css')
?>

<?php echo AfficheAlerte($alerte); ?>


<form method="POST" action="index.php?cible=verifinscriptionform">

    <div class="section-1">
        <input type="text" name="mail" placeholder="Adresse mail"/>
	    <input type="text"  name="lastName" placeholder="Nom" />
        <input type="text"  name="firstName" placeholder="Prénom"/>
    </div>

    <div class="section-2">
	    <input type="password"  name="password" placeholder="Mot de passe" />
        <input type="tel"  name="phoneNumber" placeholder="Téléphone" />
    </div>

    <div class="section-3">
        <div class="address-text">Adresse de facturation</div>

        <label hidden>Number</label>
        <input type="number"  name="addressNumber" placeholder="Numéro"/>

        <label hidden>Road</label>
        <input type="text"  name="addressStreet" placeholder="Rue"/>

        <label hidden>Town</label>
        <input type="text"  name="addressCity" placeholder="Ville" />

        <label hidden>Country</label>
        <select name="addressCountry" class="country-choice">
            <option value="exemple">Pays</option>
            <option value="france" >France</option>
            <option value="germany" >Deutschland</option>
            <option value="england" >England</option>
            <option value="japon" >日本</option>
        </select>
    </div>


    <button type="submit" name="submit">S'inscrire</button>

</form>

<p><a href="index.php">Retour</a></p>

<?php

require ('vues/footer.php');
?>