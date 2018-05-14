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
            Addresse
        </th>
        <th>
            ID propriétaire
        </th>
        <th>
            ID locataire
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
            <?php echo($element["name"]); ?>
        </td>
        <td>
            <?php echo($element["addressNumber"]); ?>
        </td>
        <td>
            <?php echo($element["id_owner"]); ?>
        </td>
        <td>
            <?php echo($element["id_tenant"]); ?>
        </td>
    </tr>
<?php
}

?>

</table>




<?php
require('vues/footer.php');
?>