<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 06/05/2018
 * Time: 18:05
 */

require ('vues/header_'.$status.'.php');
?>



<h1>Mon Abonnement</h1>

    <h2>
<?php
if (findUserByIdInSubscription($bdd,$_SESSION['userId'][0])==1){echo ("Pack une maison");}
else { echo("Pack plusieurs maisons");} ?>
    </h2>


<div class="house">

    <?php foreach ($myHouses as $house){
        $sensorTemperatureInHouse=getAllTypeSensorsFromResidence($bdd,$house['ID'],2);
        $sensorMouvementInHouse=getAllTypeSensorsFromResidence($bdd,$house['ID'],3);
        $i=$i+count($sensorTemperatureInHouse);
        $j=$j+count($sensorMouvementInHouse);?>
        <h3>
            <?php echo ($house['name']);?>
        </h3>
        <h4 class="temperature">
            Capteur de Température : <?php echo ($i) ?>
        </h4>

        <h4 class="movement">
            Capteur de Mouvement : <?php echo ($j) ?>
        </h4>

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
    <?php } ?>

</div>

<?php require ('vues/footer.php'); ?>