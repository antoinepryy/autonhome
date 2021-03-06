<?php 
/**
* Vue : accueil
*/

require ('vues/header_'.$status.'.php');
require ('vues/accueil_'.$status.'.php');
?>

    <section class="why-us">
        <div>
            <p>

            </p>

         </div>
    </section>

    <section class="products">
        <div class="product-text">
            <h4>
                Découvrez nos produits pour compléter votre offre
            </h4>
            <div class="image">
                <div class="image1">
                    <img src="ressources/pictures/capteurdelumiereLDR.jpg">
                    <p>Capteur de lumière LDR</p>
                </div>
                <div class="image2">
                    <img src="ressources/pictures/capteurdetemperature.jpg">
                    <p>Capteur de température LM35</p>
                </div>
                <div class="image3">
                    <img src="ressources/pictures/microelectret.JPG">
                    <p>Microphone electret</p>
                </div>
            </div>
        </div>
        <div class="products-show">

        </div>
    </section>




<section class="faq">
    <div>
        <a href="index.php?cible=faq"><img class="logo_FAQ" src="ressources/pictures/logo_FAQ.png" title="logo_Assistance" alt="logo_Assistance"></a>
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
            <a href="index.php?cible=assistance"><img class="logo_Assistance" src="ressources/pictures/logo_Assistance.png" title="logo_FAQ" alt="logo_FAQ"></a>
            <h3>
                Assistance
            </h3>
            <p>
            Une assistance 24h/24 7j/7 pour vous accompagner sur la prise en main et l'utilisation d'Autonhome
            </p>
        </div>
    </section>

<?php require ('footer.php'); ?>
