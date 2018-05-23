<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 23/05/2018
 * Time: 19:28
 */


require ('vues/header_'.$status.'.php');
?>

    <table>
        <tr>
            <th>
                Topic
            </th>
            <th>
                Message
            </th>
        </tr>

        <?php
        foreach ($value as $element){
            ?>
            <tr>
                <td>
                    <?php echo($element["id_topic"]); ?>
                </td>
                <td>
                    <?php echo($element["text"]); ?>
                </td>
            </tr>
            <?php
        }

        ?>

    </table>






<?php
require('vues/footer.php');
?>