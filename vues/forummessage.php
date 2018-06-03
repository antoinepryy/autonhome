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

    <div class="topic"> <?php foreach ($value as $element){ ?>
        <h2> <?php echo($element["topic"]); ?> </h2>
            <h5> <?php echo($element["firstName"]); ?>   <?php echo($element["lastName"]); ?> </br> <span class="date"> <?php echo($element["dateTime"]); ?> </span></h5>
        <?php } ?>
        <p class="text"><?php echo($element["text"]); ?></p>
        </div>

        <div class="answers"> <?php foreach ($text as $element){ ?>
                <p class="name"> <?php echo($element[0]);?>  <?php echo($element[1]);?> </p> <p class="date"> <?php echo($element[2]);?> </p>
        <p> <?php echo($element[3]);?> </p>
        <?php } ?>
        </br>
        </div>









<?php
    require('vues/footer.php');
?>