<?php
/**
 * Vue : entête HTML
 */
?>
<!DOCTYPE html>
<head>
    <title>Autonhome</title>
    <meta charset="utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vues/CSS/header_LU.css">
    <link rel="stylesheet" type="text/css" href="vues/CSS/footer.css"/>
    <?php
    echo ('<link rel="stylesheet" type="text/css" href="vues/CSS/'.$section.'.css"/>');
    if(in_array($section,array("accueil"))){
        echo ('<link rel="stylesheet" type="text/css" href="vues/CSS/'.$section.'_'.$status.'.css">');
    }

    ?>


</head>
<body>

<header>

    <div class="ma-maison">
        <a href=""> Ma maison </a>
    </div>


    <div class="header-title">
        <a href="index.php?cible=accueil"><img src="ressources/logo/logodomisep_logo.png"/></a>
        <a href="index.php?cible=accueil"><img src="ressources/logo/logodomisep_logo_texte.png"/></a>

    </div>

    <nav>
        <ul>
            <li><a href="index.php?cible=nosoffres">
                Offres et Produits
                </a></li>
            <li><a href="">
                Mon abonnement
                </a></li>
            <li><a href="index.php?cible=monprofil">
                Mon profil
                </a></li>
            <li><a href="index.php?cible=logout">
                Déconnexion
                </a></li>
        </ul>
    </nav>