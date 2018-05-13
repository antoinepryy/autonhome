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
    <h1 class="addHouseTitle">
        Ajouter une maison
    </h1>

    <label class="checkboxHouseStatus" class="switch">
        <input class="checkboxHouseStatus" type="checkbox">
        <span class="checkboxHouseStatus" class="slider round"></span>
    </label>

    <form method="POST" action="index.php?cible=verifajoutmaisonform">
        <label hidden>houseName</label>
        <input type="text"  name="name" placeholder="Nom de la maison" required/>

        <span><section class="facturation-address">
            <h3>Informations</h3>
            <div>
                <label hidden>Number</label>
                <input type="number"  name="addressNumber" placeholder="Numéro" required/>
                <label hidden>Road</label>
                <input type="text"  name="addressStreet" placeholder="Rue" required/>
                <label hidden>Town</label>
                <input type="text"  name="addressCity" placeholder="Ville" required/>
                <label hidden>Country</label>
                <select name="addressCountry" class="country-choice" required>
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
        <input type="number"  name="surface" placeholder="surface" required/>
        <input type="number"  name="nbPeople" placeholder="Nombre d'habitants" required/>

        <div class="inscription-button">
            <button type="submit" name="submit">Valider</button>
        </div>

    </form>
    <form class="renter-form" action="index.php?cible=verifajoutmaisonform" method="post">
        <input type="text" name="secret" required>
        <input type="submit">
    </form>


</section>





<?php

require ('vues/footer.php');
?>

