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
    <link rel="stylesheet" type="text/css" href="vues/CSS/header.css"/>
    <link rel="stylesheet" type="text/css" href="vues/CSS/footer.css"/>
    <link rel="stylesheet" type="text/css" href="vues/CSS/accueil.css"/>
    <link rel="stylesheet" type="text/css" href=<?php echo "vues/CSS/".$section.".css" ?>/>
    <link rel="stylesheet" type="text/css" href="vues/CSS/accueil_special_UU.css"/>

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
        </ul>

    </nav>

</header>