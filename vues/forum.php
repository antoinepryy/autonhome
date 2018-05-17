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

    <section class="principal nope" id="varHeigth">
        <h1>Créer une discussion</h1>

        <form method="POST" action="index.php?cible=verifforumform" >
            <p class="titre"> <input type="text"  name="topic" placeholder="Titre du post" required/></p>
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