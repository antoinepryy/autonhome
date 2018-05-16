<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 13/05/2018
 * Time: 12:07
 */
/**
 * Vue : inscrire une nouvelle maison
 */

require ('vues/header_'.$status.'.php');
?>

<?php
if (isset($alerte)){
    echo AfficheAlerte($alerte);
} ?>

    <link rel="stylesheet" type="text/css" href="vues/CSS/forum.css"/>

    <section class="principal nope" id="varHeigth">
        <h1 class="addMessageTitle">
            Ecrire un post
        </h1>

        <form method="POST" action="index.php?cible=verifforumform" >
            <input type="text"  name="topic" placeholder="Titre du post" required/>
            <input type="text"  name="message" placeholder="Message" required/>

        </section>


            <div class="post-button">
                <button type="submit" name="submit">Valider</button>
            </div>

        </form>


    </section>





<?php

require ('vues/footer.php');
?>