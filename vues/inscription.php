<?php 
/**
* Vue : inscrire un nouvel utilisateur
*/

require ('vues/header_UU.php');
?>


<section class="principal">
    <?php
    if (isset($_GET["alertcode"])){
        switch ($_GET["alertcode"]){
            case "1":
                $alerte='Cette addresse mail est déjà enregistrée !';
                break;
            case "2":
                $alerte='Les mots de passe ne correspondent pas !';
                break;
            case "3":
                $alerte='Les addresses email ne correspondent pas !';
                break;
        }


        echo AfficheAlerte($alerte);
    } ?>
    <form method="POST" action="index.php?cible=verifinscriptionform">

        <section class="personnal-informations">
            <section class="identity">
                <input type="text"  name="lastName" placeholder="Nom" required/>
                <input type="text"  name="firstName" placeholder="Prénom" required/>
                <input type="email" name="mail" placeholder="Adresse mail" required/>
                <input type="email" name="mailPlain" placeholder="Confirmer adresse mail" required/>
                <input type="password"  minlength="6" name="password" placeholder="Mot de passe" required/>
                <input type="password"  minlength="6" name="passwordPlain" placeholder="Confirmer mot de passe" required/>
                <input type="tel"  name="phoneNumber" placeholder="Téléphone" required/>
            </section>

            <section class="facturation-address">
                <h3>Adresse de facturation</h3>
                <div>
                    <label hidden>Number</label>
                    <input type="number"  name="addressNumber" placeholder="Numéro" required/>
                    <label hidden>Road</label>
                    <input type="text"  name="addressStreet" placeholder="Rue" required/>
                    <label hidden>Town</label>
                    <input type="text"  name="addressCity" placeholder="Ville" required/>
                    <label hidden>Country</label>
                    <select name="addressCountry" class="country-choice" required>
                        <option value="exemple"> Pays</option>
                        <option value="france" >France</option>
                        <option value="germany" >Deutschland</option>
                        <option value="england" >England</option>
                        <option value="japon" >日本</option>
                    </select><br/>
                    <label hidden>ZIP-code</label>
                    <input type="number"  name="addressZipCode" placeholder="Code postal" required/><br/>
                </div>
            </section>
        </section>

        <div class="use-case">
            <input class="use-case" type="checkbox" name ="conditions" required/>
            <p>Accepter les <a href='index.php?cible=conditionsutilisation' >Conditions d'utilisation</a></p>
        </div>

        <div class="inscription-button">
            <button type="submit" name="submit">S'inscrire</button>
        </div>

    </form>


    <p><a href="index.php">Retour</a></p>

</section>


<?php

require ('vues/footer.php');
?>
