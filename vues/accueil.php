<?php 
/**
* Vue : accueil
*/

require ('vues/header.php');

?>

    <section>
        <div class="presentation-picture">
            <img src=""/>

        </div>

    </section>


    <section class="form-field">
        <form action="">
            <label hidden>Identifiant</label>
            <input type="text" placeholder="Identifiant"/><br/>
            <label hidden>Mot de passe</label>
            <input type="password" placeholder="Mot de passe"/><br />
            <label>Se souvenir de moi</label>
            <input type="checkbox"/><br />
            <a href="">Mot de passe oublié</a><br />
            <input type="submit"/>
        </form>
    </section>


    <section class="products">
        <div class="product-text">
            <p>
                Découvrez nos produits pour compléter votre offre
            </p>
        </div>
        <div class="products-show">

        </div>
    </section>


    <section class="why-us">
        <div>
            <p>
                Pourquoi choisir Autonhome ?
            </p>

        </div>
        <div>

        </div>
    </section>


<?php

require ('vues/footer.php');
?>