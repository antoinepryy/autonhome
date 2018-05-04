<?php 
/**
* Vue : inscrire un nouvel utilisateur
*/

require ('vues/header.php');
?>

<?php
if (isset($alerte)){
    echo AfficheAlerte($alerte);
} ?>


<section class="principal">
    <form method="POST" action="index.php?cible=verifinscriptionform">

        <section class="personnal-informations">
            <section class="identity">
                <input type="text"  name="lastName" placeholder="Nom" />
                <input type="text"  name="firstName" placeholder="Prénom"/>

                <input type="email" name="mail" placeholder="Adresse mail"/>
                <input type="password"  name="password" placeholder="Mot de passe" />
                <input type="tel"  name="phoneNumber" placeholder="Téléphone" />
            </section>

            <section class="facturation-address">
                <p class="address-text">Adresse de facturation</p>
                <div>
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
                    </select><br/>
                    <label hidden>ZIP-code</label>
                    <input type="number"  name="addressZipCode" placeholder="Code postal"/><br/>
                </div>
            </section>
        </section>

        <div class="inscription-button">
        <button type="submit" name="submit">S'inscrire</button></div>

    </form>


    <p><a href="index.php">Retour</a></p>

</section>


<?php

require ('vues/footer.php');
?>