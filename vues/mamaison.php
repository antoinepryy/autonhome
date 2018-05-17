<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 10/05/2018
 * Time: 12:05
 */


require ('vues/header_'.$status.'.php'); ?>
<section>
    <div class="addHouseLink"><a href="index.php?cible=ajouterunemaison">Ajouter une maison</a></div>
    <div class="display-houses">
        <div class="mes-maisons">Mes maisons</div>
        <div class="owned-houses">
            <ul class="owned-houses-list">
                <?php foreach ($residences[0] as $residence) { ?>
                    <li>
                        <?php echo ( $residence["name"] );  ?>
                        <a class="house-info" href="index.php?cible=mamaison&id=<?php echo ( $residence["ID"] );  ?>">
                        </br>
                            <img class = "image" src="ressources\pictures\maison.jpg">
                        </a>
                    </li>
                <?php } ?>


            </ul>

        </div>



        <div class="rented-houses">

            <div> En location :</div>

            <ul class="rented-houses-list">
                <?php foreach ($residences[1] as $residence) { ?>
                    <li>
                        <?php echo ( $residence["name"] );  ?>
                        <a class="house-info" href="index.php?cible=mamaison&id=<?php echo ( $residence["ID"] );  ?>">
                            </br>
                            <img class = "image" src="ressources\pictures\maison.jpg"
                        </a>
                    </li>
                <?php } ?>

            </ul>

        </div>

    </div>

</section>

<?php
require ('vues/footer.php');
?>
