<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 06/05/2018
 * Time: 18:05
 */

require ('vues/header_'.$status.'.php');
?>



<h1>
Mon Abonnement
</h1>


<section>
<h2>
    Pack une maison
</h2><br>

    <form class="formulairemonabonnement" method="post">
        <div class="elementsformulairemonabonnement">
            <input type="text" name="capteurs de température" placeholder="Capteur de température">
            <input type="text" name="capteur de lumière" placeholder="Capteur de lumière">


            <BR>

            <h3>
                Alarme
            </h3>


            <label> Microphone </label>
            <input type="checkbox" name="micro" placeholder="micro"> <br>
            <label> Détecteur de mouvement</label>
            <input type="checkbox" name ="détecteurmouvement" placeholder="détecteurmouvement"><br>
            <label>Caméra</label>
            <input type ="checkbox" name="Caméra"> <br>




    </form>

</section>

<?php require('footer.php'); ?>