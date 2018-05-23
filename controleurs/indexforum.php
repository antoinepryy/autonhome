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
}
elseif (isLoggedAsUser()){
    $status="LU";
    if ($_GET["table"]='forumMessage') {
        $section = 'forumMessage';
        $value = getAll($bdd, "forum_message");
        require('vues/indexforum.php');
    }
    else {
        $section = 'forumTopic';
        $value = getAll($bdd, "forum_topic");
        require('vues/indexforum.php');
    }
}
else{
    $status="UU";
}

include('vues/forum.php');

