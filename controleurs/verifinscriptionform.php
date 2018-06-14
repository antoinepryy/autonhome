<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:31
 */
if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}
if(isset($_POST["mail"]) && ($_POST["password"]==$_POST["passwordPlain"]) && ($_POST["mail"]==$_POST["mailPlain"])){
    if (createUser($bdd, $_POST)){
        $section = 'accueil';
        $status;
        if(isLoggedAsAdmin()){
            $status="AD";
        }
        elseif (isLoggedAsUser()){
            $status="LU";
        }
        else{
            $status="UU";
        }
        header("Location: index.php?cible=accueil");
    }
    else{
        $section='inscription';
        $alerte='Cette addresse mail est déjà enregistrée !';
        $status='UU';
        header("Location: index.php?cible=inscription&alertcode=1");
    }
}
elseif($_POST["password"] != $_POST["passwordPlain"]){
    header("Location: index.php?cible=inscription&alertcode=2");

}
elseif ($_POST["mail"] != $_POST["mailPlain"]){
    header("Location: index.php?cible=inscription&alertcode=3");

}
else{
    require ('erreur404.php');
}

