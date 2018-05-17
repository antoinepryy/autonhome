<?php
/**
 * Vue : admin
 */
?>


<section class="my-profil">
    <h3>
        Mon profil
    </h3>
    <div>
        <p class="name"> <?php echo $_SESSION["userFirstName"]?> <?php echo $_SESSION["userLastName"]?></p>
        <p class="admin"> ADMIN</p>
    </div>

</section>
