<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 25/05/2018
 * Time: 14:01
 */


require ('vues/header_'.$status.'.php');


?>
    <a href="index.php?cible=repondrediscussion"> <button class="repondre_discussion" type="submit" name="submit"> Répondre à la discussion </button> </a>
        <h1> <?php echo($value["topic"]); ?> </h1>
        <h2> <?php echo($value["id_user"]); ?> </br> <?php echo($value["dateTime"]); ?> </h2>

        <?php foreach ($text as $element){ ?>
        <p> <?php echo($element["id_user"]);?></p>
        <p> <?php echo($element["dateTime"]);?></p>
        <p> <?php echo($element["text"]);?> </p>
        <?php } ?>









<?php
    require('vues/footer.php');
?>