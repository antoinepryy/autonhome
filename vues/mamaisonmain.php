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
        <div><a class="salon" href="index.php?cible=salon">Salon</a></div>
        <div><a class="cuisine" href="index.php?cible=cuisine">Cuisine</a></div>
        <div><a class="chambre" href="index.php?cible=chambre">Chambre</a></div>
        <div><a class="salle-a-manger" href="index.php?cible=salleamanger">Salle à manger</a></div>
        <div><a class="salle-de-bain" href="index.php?cible=salledebain">Salle de bain</a></div>
        <div><a class="autres-pieces" href="index.php?cible=autrespieces">Autres pièces</a></div>



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
                        <option value="Chambre">Chambre</option>
                        <option value="Cuisine">Cuisine</option>
                        <option value="Salon">Salon</option>
                        <option value="Salle à manger">Salle à manger</option>
                        <option value="Salle de bain">Salle de bain</option>
                        <option value="Autres pièces">Autres pièces</option> <br />

                    </select>

                    <input type="submit" value="Submit">

                </form></p>
            </div>

        </div>

    </div>
</section>

<?php
require ('vues/footer.php');