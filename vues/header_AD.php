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
    <link rel="stylesheet" type="text/css" href="vues/CSS/header_AD.css"/>
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
    <div class="header-title">
        <a href="index.php?cible=accueil"><img src="ressources/logo/logodomisep_logo.png"/></a>
        <a href="index.php?cible=accueil"><img src="ressources/logo/logodomisep_logo_texte.png"/></a>

    </div>

    <nav>
        <ul>
            <li><a href="">
                    Offres et Produits
                </a></li>
            <li><a href="">
                    Espace Admin
                </a></li>
            <li><a href="index.php?cible=logout">
                    Déconnexion
                </a></li>
        </ul>

    </nav>