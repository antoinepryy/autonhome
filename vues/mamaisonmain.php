<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 10/05/2018
 * Time: 14:07
 */

require ('vues/header_'.$status.'.php'); ?>
    <section>
        <?php
        echo $_GET["id"];
        ?>
        <button id="myBtn">Open Modal</button>


    </section>

    <div class="create-room">

        <div id="modalCreateRoom" class="modal modalCreateRoom">


            <div class="modal-content">
                <span class="close">&times;</span>
                <p><form method="post" action="index.php?cible=verifajoutpieceform">

                    <label for="roomCategory">Nom de la pièce:</label>
                    <input type="text"  name="roomname" id="roomname" placeholder="Ex : Chambre de Pierre" required/>

                    <label for="roomCategory">Type de la pièce: </label> <br />
                    <select name="'roomCategory" id="roomCategory" required>
                        <option value="chambre">Chambre</option>
                        <option value="cuisine">Cuisine</option>
                        <option value="salon">Salon</option>
                        <option value="salleamanger">Salle à manger</option>
                        <option value="salledebain">Salle de bain</option>
                        <option value="autrespieces">Autres pièces</option>

                        <input type="submit" value="Submit">

                </form></p>
            </div>

        </div>






    </div>

<?php
require ('vues/footer.php');