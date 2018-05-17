<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 13/05/2018
 * Time: 18:39
 */

require ('vues/header_'.$status.'.php');
?>
<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Nom
        </th>
        <th>
            Etat
        </th>
        <th>
            Numéro de série
        </th>
        <th>
            ID chambre
        </th>
        <th>
            ID type de capteur
        </th>
    </tr>

    <?php
    foreach ($list as $element) {
        ?>
        <tr>
            <td>
            <?php echo($element["ID"]); ?>
            </td>
            <td>
                <?php echo($element["name"]); ?>
            </td>
            <td>
                <?php echo($element["state"]); ?>
            </td>
            <td>
                <?php echo($element["serial"]); ?>
            </td>
            <td>
                <?php echo($element["id_room"]); ?>
            </td>
            <td>
                <?php echo($element["id_sensorType"]); ?>
            </td>
        </tr>


        <?php
    }
    ?>




</table>



<?php
require ('vues/footer.php');?>