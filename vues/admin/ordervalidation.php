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
            echo ('<div>'.$element["name"].'<a href="">Valider cette commande</a></div><br>');
        }

        ?>

    </div>


</section>



<?php
require ('vues/footer.php');
?>
