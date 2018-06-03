<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 01/06/2018
 * Time: 16:43
 */

include('../../modele/effector.php');

changeEffectorAction($bdd, $_REQUEST['id'], $_REQUEST['value']=='true'?"ON":"OFF");

//$array = getUsersByFirstLetters($bdd, $_GET['txt']);
//$result='';

echo ($_REQUEST['value']=='true'?"ON":"OFF");

