<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 25/05/2018
 * Time: 16:40
 */
require ('vues/header_'.$status.'.php');
?>

<?php
if (isset($alerte)){
    echo AfficheAlerte($alerte);
} ?>

    <section class="principal nope" id="varHeigth">
        <h1>Répondre à la discussion</h1>

        <form method="POST" action="index.php?cible=verifanswerform" >
            <p class="texte"> <textarea rows = '5' cols = '80' name = 'text'></textarea> </p>


    </section>
    <div class="post-button">
        <button type="submit" name="submit">Valider</button>
    </div>

    </form>


    </section>





<?php

require ('vues/footer.php');
?>