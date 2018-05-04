<?php
/**
 * Vue : connection
 */
?>
<section class="form-field">
    <div class="form-container"></div>
        <form action="index.php?cible=verifconnexionform" method="post">
            <label hidden>Adresse mail</label>
            <input type="text" placeholder="Identifiant" name="mail"/><br/>
            <label hidden>Mot de passe</label>
            <input type="password" placeholder="Mot de passe" name="password"/><br />
            <a class ="link-mdp-oublie" href="">Mot de passe oublié</a><br />
            <label>Se souvenir de moi</label>
            <input type="checkbox" name="rememberMe"/><br />
            <input type="submit"/><br/>
        </form>
        <form action="index.php?cible=inscription" method="post">
            <input hidden/>
            <input type="submit" value="S'inscrire" /><br/>
        </form>
    </div>
</section>