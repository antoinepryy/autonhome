<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 10/05/2018
 * Time: 12:05
 */


require ('vues/header_'.$status.'.php'); ?>

<ul class="owned-houses">
    <?php foreach ($residences[0] as $residence) { ?>
        <li> <?php echo ( $residence["name"] );  ?> </li>
    <?php } ?>


</ul>
<ul class="rented-houses">
    <?php foreach ($residences[1] as $residence) { ?>
        <li> <?php echo ( $residence["name"] );  ?> </li>
    <?php } ?>

</ul>

<?php
require ('vues/footer.php');
?>
