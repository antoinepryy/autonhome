<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 23/05/2018
 * Time: 19:28
 */


require ('vues/header_'.$status.'.php');
?>

    <a href="index.php?cible=forum"> <button class="nouvelle_discussion" type="submit" name="submit"> Créer une discussion </button> </a>

    <table>
        <tr>
            <th>
                ID user
            </th>
            <th>
                Date
            </th>
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
                    <?php echo($element["id_user"]); ?>
                </td>
                <td>
                    <?php echo($element["dateTime"]); ?>
                </td>
                <td>
                    <?php echo($element["topic"]); ?>
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