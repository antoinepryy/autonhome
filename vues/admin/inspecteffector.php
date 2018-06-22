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
                Socket
            </th>
            <th>
                ID chambre
            </th>
            <th>
                ID type d'actionneur
            </th>
        </tr>

        <?php
        foreach ($list as $element) {
            ?>

            <tr>
                <td class="id">
                    <?php echo($element["ID"]); ?>
                </td>
                <td class="name">
                    <?php echo($element["name"]); ?>
                </td>
                <td class="state">
                    <?php echo($element["state"]); ?>
                </td>
                <td class="cardObjectNumber">
                    <?php echo($element["cardNumber"]." / ".$element["objectNumber"]); ?>
                </td>
                <td class="idRoom">
                    <?php echo($element["id_room"]); ?>
                </td>
                <td class="idEffectorType">
                    <?php echo($element["id_effectorType"]); ?>
                </td>
                <td class="Boutton">
                    <input type="submit" id="<?php echo $element["ID"] ?>" value="Modifier" onclick="displayModalOfButtonPressed(this.id,)" />
                </td>
            </tr>

            <?php
        }
        ?>




    </table>

    <div id="myModal" class="modal">

    </div>





<?php
require ('vues/footer.php') ?>