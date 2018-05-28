<?php


require ('vues/header_'.$status.'.php');


    ?>

<section>
    <input type="text" id="findUser" oninput="showUsers()">


    <table id="results">
    </table>


</section>




<?php
require('vues/footer.php');
?>