<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 25/05/2018
 * Time: 14:01
 */


require ('vues/header_'.$status.'.php');

?>
    <a href="index.php?cible=repondrediscussion&id=<?php echo($_GET["id"]) ?>"> <button class="repondre_discussion" type="submit" name="submit"> Répondre à la discussion </button> </a>
        <?php foreach ($value as $element){ ?>
        <h1> <?php echo($element["topic"]); ?> </h1>
        <h2> <?php echo($element["firstName"]); ?>   <?php echo($element["lastName"]); ?> </br> <?php echo($element["dateTime"]); ?> </h2>
        <?php } ?>
        <p><?php echo($element["text"]); ?></p>

        <?php foreach ($text as $element){ ?>
        <p> <?php echo($element[0]);?></p>
        <p> <?php echo($element[1]);?></p>
        <p> <?php echo($element[2]);?> </p>
        <?php } ?>









<?php
    require('vues/footer.php');
?>