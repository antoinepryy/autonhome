<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 17/05/2018
 * Time: 10:18
 */

include('../../modele/users.php');


$array = getUsersByFirstLetters($bdd, $_GET['txt']);
$result='
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
</tr>';
foreach($array as $element){
    $result= $result."
    <tr>
    <td>".$element["ID"]."</td>
    <td>".$element["lastName"]."</td>
    <td>".$element["firstName"]."</td>
    <td>".$element["phoneNumber"]."</td>
    <td>".$element["ID"]."</td>
    </tr>
    ";


}
echo ($result);

?>