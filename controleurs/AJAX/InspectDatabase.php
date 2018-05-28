<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 17/05/2018
 * Time: 10:18
 */

include('../../modele/users.php');


$array = getUsersByFirstLetters($bdd, $_GET['txt']);
$result='';
foreach($array as $element){
    $result = $result . '
    <h1>'.$element["firstName"].'</h1>
    ';
}
echo($result);
?>