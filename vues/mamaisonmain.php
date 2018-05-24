<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 10/05/2018
 * Time: 14:07
 */

require ('vues/header_'.$status.'.php'); ?>

<section class="principal">


    <section class="house-info">
        <div>

            <div class="house-name"><?php echo ($houseInfo['name']); ?></div>
            <div class="house-address"><?php echo ($houseInfo[3].' '.$houseInfo[4].' '.$houseInfo[5].' '.$houseInfo[6]); ?></div>
            <div class="house-surface">Surface : <?php echo ($houseInfo['surface']); ?> m²</div>
            <div class="user-rent">
                <?php
                if(isset($user['firstName'])){
                    echo ('Loué à '.$user['firstName'].' '.$user['lastName']);
                    echo('<a href="">Supprimer la location</a>');
                }
                else{
                    echo ('Non loué');
                    echo('<button id="dispSecret">Afficher le code</button>');
                    echo('<div id="secretCode" >'. $houseInfo["secret"].' </div>');
                }
                ?>

            </div>


        </div>

   </section>

    <section class="roomCategory">
        <div class="chambre">
            <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=1"); ?> > <img src="ressources/pictures/chambre1.jpg""></a>
            <a class="text" <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=1"); ?>>Chambre</a>
        </div>
        <div class="salle-de-bain">
            <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=2"); ?>> <img src="ressources/pictures/salledebain1.jpg""></a>
            <a class="text" <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=2"); ?>>Salle de bain</a>
        </div>
        <div class="salon">
            <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=3"); ?>><img src="ressources/pictures/salon1.jpg""></a>
            <a class="text" <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=3"); ?>>Salon</a>
        </div>
        <div class="salle-a-manger">
            <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=4"); ?>><img src="ressources/pictures/salleamanger1.jpg""></a>
            <a class="text" <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=4"); ?>>Salle à manger</a>
        </div>
        <div class="cuisine">
            <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=5"); ?>><img src="ressources/pictures/cuisine1.jpg""></a>
            <a class="text" <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=5"); ?>>Cuisine</a>
        </div>
        <div class="autres-pieces">
            <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=6"); ?>><img src="ressources/pictures/bureau1.jpg""></a>
            <a class="text" <a href=<?php echo("index.php?cible=mamaison&id=".$_GET['id']."&idroom=6"); ?>>Autres pièces</a>
        </div>



    </section>



    <section>
        <button id="myBtn">Ajouter une pièce</button>

    </section>

    <div class="create-room">

        <div id="modalCreateRoom" class="modal modalCreateRoom">

            <div class="modal-content">
                <span class="close">&times;</span>
                <p><form method="post" action="index.php?cible=verifajoutpieceform&id=<?php echo ( $_GET['id'] );  ?>">

                    <label for="roomCategory">Nom de la pièce:</label>
                    <input type="text"  name="roomName" id="roomName" placeholder="Ex : Chambre de Pierre" required/> <br />

                    <label for="roomCategory">Type de la pièce: </label>
                    <select name="roomCategory" id="roomCategory" required>
                        <option value="Chambre" selected >Chambre </option>
                        <option value="Cuisine">Cuisine</option>
                        <option value="Salon">Salon</option>
                        <option value="Salle à manger">Salle à manger</option>
                        <option value="Salle de bain">Salle de bain</option>
                        <option value="Autres pièces">Autres pièces</option> <br />

                    </select>
                    <input type="number" name="idHouse" value="<?php echo($_GET['id']); ?>" hidden>

                    <input type="submit" value="Submit">

                </form></p>
            </div>

        </div>

    </div>
</section>

<?php
require ('vues/footer.php');
