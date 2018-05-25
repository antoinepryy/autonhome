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
}
elseif (isLoggedAsUser()){
    $status="LU";
    $section = 'forumMessage';
    $value = getAll($bdd, "forum_discussion");
    orderDiscussions($bdd);

}
else{
    $status="UU";
}

include('vues/indexforum.php');

