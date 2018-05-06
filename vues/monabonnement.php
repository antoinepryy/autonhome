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
Mon abonnement
</h1>


<section>
<h2>
    Pack une maison
</h2><br>

    <form class="formulairemonabonnement" method="post">
        <div class="elementsformulairemonabonnement">
            <input type="text" name="capteurs de température" placeholder="capteurs de température">
            <input type="text" name="capteurs de lumière" placeholder="capteurs de lumière"><br>
            <BR>

            <h3>
                Alarme
            </h3><br>

            <BR>

            <label> micro </label>
            <input type="checkbox" name="micro" placeholder="micro"> <br>
            <label> détecteur de mouvement</label>
            <input type="checkbox" name ="détecteurmouvement" placeholder="détecteurmouvement"><br>
            <label> caméra </label>
            <input type ="checkbox" name="caméra" placeholder="caméra"><br>

        </div>


    </form>

</section>

<?php require('footer.php'); ?>