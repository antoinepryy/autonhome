<?php
/**
 * Vue : inscrire une nouvelle maison
 */

require ('vues/header_'.$status.'.php');
?>

<?php
if (isset($alerte)){
    echo AfficheAlerte($alerte);
} ?>

<link rel="stylesheet" type="text/css" href="vues/CSS/ajouterunemaison.css"/>

<section class="principal">
    <h1>
        Ajouter une maison
    </h1>

    <form method="POST" action="index.php?cible=verifajoutmaisonform">
        <label hidden>houseName</label>
        <input type="text"  name="houseName" placeholder="Maison principale" required/>

        <span><section class="facturation-address">
            <h3>Adresse de facturation</h3>
            <div>
                <label hidden>Number</label>
                <input type="number"  name="addressHouseNumber" placeholder="Numéro" required/>
                <label hidden>Road</label>
                <input type="text"  name="addressHouseStreet" placeholder="Rue" required/>
                <label hidden>Town</label>
                <input type="text"  name="addressHouseCity" placeholder="Ville" required/>
                <label hidden>Country</label>
                <select name="addressHouseCountry" class="country-choice" required>
                    <option value="exemple">Pays</option>
                    <option value="france" >France</option>
                    <option value="germany" >Deutschland</option>
                    <option value="england" >England</option>
                    <option value="japon" >日本</option>
                </select><br/>
                <label hidden>ZIP-code</label>
                <input type="number"  name="addressZipCode" placeholder="Code postal" required/><br/>
            </div>
        </section></span>

        <label hidden>Surface</label>
        <input type="number"  name="Surface" placeholder="Surface" required/>

        <div class="inscription-button">
            <button type="submit" name="submit">Valider</button>
        </div>

    </form>

    <p><a href="index.php">Retour</a></p>

</section>





<?php

require ('vues/footer.php');
?>

