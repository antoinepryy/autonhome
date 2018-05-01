<?php 
/**
* Vue : accueil
*/

require ('vues/header.php');

?>

    <section class="form-field">
        <form action="">
            <label hidden>Identifiant</label>
            <input type="text" placeholder="Identifiant"/><br/>
            <label hidden>Mot de passe</label>
            <input type="password" placeholder="Mot de passe"/><br />
            <a class ="link-mdp-oubie" href="">Mot de passe oublié</a><br />
            <label>Se souvenir de moi</label>
            <input type="checkbox"/><br />
            <input type="submit"/><br/>
            <label hidden> Inscription </label>
            <input class="inscription" type="text" placeholder="Inscription"/><br/>
        </form>
    </section>

    <section xmlns="http://www.w3.org/1999/html">
        <div class="presentation-picture">
            <img src=""/>

        </div>

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

<section class="faq">
    <div>
        <a href=""><img src=""/></a>
        <h3>
            FAQ
        </h3>
        <p>
            La foire aux questions d'AutonHome
        </p>
    </div>

</section>

    <section class="assistance">
        <div>
            <a href=""><img src=""/></a>
            <h3>
                Assistance
            </h3>
            <p>
            Une assistance 24h/24 7j/7 pour vous accompagner sur la prise en main et l'utilisation d'Autonhome"
            </p>
        </div>
    </section>


<?php

require ('vues/footer.php');
?>
