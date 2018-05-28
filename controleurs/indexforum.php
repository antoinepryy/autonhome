<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 23/05/2018
 * Time: 20:10
 */

/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 15/05/2018
 * Time: 12:07
 */
$section = 'indexforum';

if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$status;
if(isLoggedAsAdmin()){
    $status="AD";
    $section = 'forumMessage';
    $value = getAll($bdd, "forum_discussion");
    $value = array_reverse($value);
    $nom = afficheNom($bdd);
}
elseif (isLoggedAsUser()){
    $status="LU";
    $section = 'forumMessage';
    $value = getAll($bdd, "forum_discussion");
    $value = array_reverse($value);
    $nom = afficheNom($bdd);
}
else{
    $status="UU";
}

include('vues/indexforum.php');

