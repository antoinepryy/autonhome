<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 15/05/2018
 * Time: 12:07
 */
$section = 'forum';

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
}
else{
    $status="UU";
}


include('vues/forum.php');
<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 25/05/2018
 * Time: 14:13
 */
$section = 'forummessage';

if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$status;
if(isLoggedAsAdmin()){
    $status="AD";
    $section = 'forumMessage';
    $value = getInfos($bdd, $_GET["id"]);
    $text = getMessages($bdd, $_GET["id"]);
}
elseif (isLoggedAsUser()){
    $status="LU";;
    $section = 'forumMessage';
    $value = getInfos($bdd, $_GET["id"]);
    $text = getMessages($bdd, $_GET["id"]);

}
else{
    $status="UU";
}


include('vues/forummessage.php');

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
    $section = 'indexforum';
    $value = getAllMessagesWithNames($bdd);
    $value = array_reverse($value);
}
elseif (isLoggedAsUser()){
    $status="LU";
    $section = 'indexforum';
    $value = getAllMessagesWithNames($bdd);
    $value = array_reverse($value);
}
else{
    $status="UU";
}

include('vues/indexforum.php');

