<?php


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
                Prénom
            </th>
            <th>
                Mail
            </th>
            <th>
                Numéro de téléphone
            </th>
        </tr>

        <?php
        foreach ($list as $element){
            ?>
            <tr>
                <td>
                    <?php echo($element["ID"]); ?>
                </td>
                <td>
                    <?php echo($element["lastName"]); ?>
                </td>
                <td>
                    <?php echo($element["firstName"]); ?>
                </td>
                <td>
                    <?php echo($element["mail"]); ?>
                </td>
                <td>
                    <?php echo($element["phoneNumber"]); ?>
                </td>
            </tr>
            <?php
        }

        ?>

    </table>




<?php
require('vues/footer.php');
?>