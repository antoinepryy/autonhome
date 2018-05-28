<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 13/05/2018
 * Time: 18:07
 */

require ('vues/header_'.$status.'.php');
?>

<section>
    <div class="link-tools">
        <ul>
            <a href="index.php?cible=espaceadmin&mode=ordervalidation">
                <li>
                    Valider les commandes
                </li>
            </a>

            <a href="index.php?cible=inspectdatabase&table=user">
                <li>
                    Gestion des utilisateurs
                </li>
            </a>
            <a href="index.php?cible=inspectdatabase&table=residence">
                <li>
                    Gestion des résidences
                </li>
            </a>
            <a href="index.php?cible=inspectdatabase&table=sensor">
                <li>
                    Gestion des capteurs
                </li>
            </a>
        </ul>

    </div>


</section>



<?php
require ('vues/footer.php');
?>
