<?php
/**
 * Vue : connection
 */
?>
<section class="form-field">
    <div class="form-container"></div>
        <form action="" method="post">
            <label hidden>Identifiant</label>
            <input type="text" placeholder="Identifiant"/><br/>
            <label hidden>Mot de passe</label>
            <input type="password" placeholder="Mot de passe"/><br />
            <a class ="link-mdp-oubie" href="">Mot de passe oublié</a><br />
            <label>Se souvenir de moi</label>
            <input type="checkbox"/><br />
            <input type="submit"/><br/>
        </form>
        <form action="index.php?cible=inscription" method="get">
            <input type="submit" value="S'inscrire" /><br/>
        </form>
    </div>
</section>