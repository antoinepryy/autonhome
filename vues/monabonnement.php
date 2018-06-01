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

<h2>
        Pack une maison
</h2><br>


    <BR>

    <h3 class="temperature">
        Capteur de Température : <?php echo ($i) ?>
    </h3>

    <h3 class="movement">
        Capteur de Mouvement : <?php echo ($j) ?>
    </h3>


<section>

    <form class="formulairemonabonnement" method="post">
        <div class="elementsformulairemonabonnement">

            <h5>
                Alarme
            </h5>


            <label> Microphone </label>
            <input type="checkbox" name="micro" placeholder="micro"> <br>
            <label> Détecteur de mouvement</label>
            <input type="checkbox" name ="détecteurmouvement" placeholder="détecteurmouvement"><br>
            <label>Caméra</label>
            <input type ="checkbox" name="Caméra"> <br>




    </form>

</section>

<?php require('footer.php'); ?>