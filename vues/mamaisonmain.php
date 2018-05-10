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




        <div id="myModal" class="modal">


            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>

        </div>

    </div>

<?php
require ('vues/footer.php');