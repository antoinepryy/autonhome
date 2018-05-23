<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 23/05/2018
 * Time: 12:14
 */

require ('vues/header_'.$status.'.php');
?>

<section>
    <div class="link-tools">
        <?php
        foreach ($avaitingOrders as $element){
            echo ($element["name"]);
        }

        ?>

    </div>


</section>



<?php
require ('vues/footer.php');
?>
