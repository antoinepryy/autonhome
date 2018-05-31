<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 23/05/2018
 * Time: 19:28
 */


require ('vues/header_'.$status.'.php');

?>

<div class="principal">

    <h1> Forum </h1>

    <a href="index.php?cible=forum"> <button class="nouvelle_discussion" type="submit" name="submit"> Créer une discussion </button> </a>

    <div class="discussion">
        <?php foreach ($value as $element) { ?>
            <div class="discussion-infos">
                <h3> <a href="index.php?cible=forummessage&id=<?php echo ($element["ID"]);?>"> <?php echo($element["topic"]); ?> </a> </h3>
                <p> <?php echo($element['firstName'].'    '.$element['lastName']);?> <br> <?php echo($element["dateTime"]); ?> </p>
                <p><?php echo($element["text"]) ?></p>
            </div>
    <?php } ?>
    </div>
</div>






<?php
require('vues/footer.php');
?>