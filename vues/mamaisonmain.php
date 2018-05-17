<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 10/05/2018
 * Time: 14:07
 */

require ('vues/header_'.$status.'.php'); ?>

<section class="principal">

    <?php $houseInfo = getHouseInfoFromId($bdd,$_GET["id"]);

    echo ($house[addressStreet]); ?>



    <section class="house-info">
        <div>

        </div>



   </section>





    <section>
        <?php echo $_GET["id"]; ?>
        <button id="myBtn">Open Modal</button>

    </section>

    <div class="create-room">

        <div id="modalCreateRoom" class="modal modalCreateRoom">

            <div class="modal-content">
                <span class="close">&times;</span>
                <p><form method="post" action="index.php?cible=verifajoutpieceform&id=<?php echo ( $_GET['id'] );  ?>">

                    <label for="roomCategory">Nom de la pièce:</label>
                    <input type="text"  name="roomName" id="roomName" placeholder="Ex : Chambre de Pierre" required/>

                    <label for="roomCategory">Type de la pièce: </label> <br />
                    <select name="roomCategory" id="roomCategory" required>
                        <option value="Chambre">Chambre</option>
                        <option value="Cuisine">Cuisine</option>
                        <option value="Salon">Salon</option>
                        <option value="Salle à manger">Salle à manger</option>
                        <option value="Salle de bain">Salle de bain</option>
                        <option value="Autres pièces">Autres pièces</option>

                        <input type="submit" value="Submit">

                </form></p>
            </div>

        </div>

    </div>
</section>

<?php
require ('vues/footer.php');