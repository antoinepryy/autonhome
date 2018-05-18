<?php
/**
 * Vue : Etat de ma maison
 */
?>


<section class="my-house-state">

    <select name="house" class="house-choice">
<!--        --><?php //foreach($myHouses as $home) {
////            echo('<option>'.'Bouh'.'</option>');
//            die(var_dump($home));
//
//        }
//        ?>

    </select>







    <h3>
        Etat de votre maison
    </h3>

    <div>
        <label>Alarme</label>
        <input type="checkbox"/><br />
        <label >Température</label>
        <input type="number" step="0.5"/><br/>
    </div>

    <h4>
        Lumières :
    </h4>

    <div class="light">
        <label>Salon</label>
        <input type="checkbox"/><br />
        <label>Cuisine</label>
        <input type="checkbox"/><br />
        <label>Chambre 1</label>
        <input type="checkbox"/><br />
        <label>Chambre 2</label>
        <input type="checkbox"/><br />
        <label>Salle de bain</label>
        <input type="checkbox"/><br />
        <label>Salle à manger</label>
        <input type="checkbox"/><br />
    </div>

</section>