<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 28/05/2018
 * Time: 16:30
 */
require ('vues/header_'.$status.'.php');
?>

<h1>
Nos Offres
</h1>

<section class="effector">


    <h2>
Nos Actionneurs
</h2>

    <form action="index.php?cible=verifajouteffector&roomchoice=<?php echo($_GET['roomchoice']); ?>" method="post">

        <div id= "effectorlumierelegende" class="effectorlumierelegende"> <img class="effectorlumiere" src="ressources/pictures/lightswitch.jpg">

            <input type="number"  id="effectorlightQuantity" name="effectorlightquantity"  placeholder="Quantité" oninput="createViewEffectorLight()"/>

            <div id="inputEffectorLight"></div>

        </div>

        <div  id= "shutterlegende" class="shutterlegende"> <img class="shutter" src="ressources/pictures/volets.jpeg">

            <input type="number"  id="shutterQuantity" name="shutterquantity" placeholder="Quantité" oninput="createViewInputShutter()"/>

            <div id="inputShutter"></div>

        </div>

        <div class="fanlegende"> <img class="fan" src="ressources/pictures/ventilateur.jpg">

            <input type="number"  id="fanQuantity" name="fanquantity" placeholder="Quantité" oninput="createViewInputFan()" />

            <div id="inputFan"></div>

        </div>

        <input type="submit" value="Submit">


    </form>

</section>

<?php
include ('footer.php');
?>
