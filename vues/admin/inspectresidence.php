<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 13/05/2018
 * Time: 18:39
 */

require ('vues/header_'.$status.'.php');

?>
<section>
    <div class="link-tools">
        <a href="index.php?cible=inspectdatabase&table=user">
            Gestion des utilisateurs

        </a>
        <a href="index.php?cible=inspectdatabase&table=residence">
            Gestion des résidences
        </a>
        <a href="index.php?cible=inspectdatabase&table=sensor">
            Gestion des capteurs

        </a>

    </div>


</section>



<?php
require ('vues/footer.php');
?>