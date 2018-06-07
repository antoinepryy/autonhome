<?php
/**
 * Vue : entête HTML
 */
?>
<!DOCTYPE html>
<head>
    <title>Autonhome</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vues/CSS/all.css"/>
    <link rel="stylesheet" type="text/css" href="vues/CSS/header_LU.css">
    <link rel="stylesheet" type="text/css" href="vues/CSS/footer.css"/>
    <?php
    echo ('<link rel="stylesheet" type="text/css" href="vues/CSS/'.$section.'.css"/>');
    ?>


</head>
<body>

<header>

    <div class="ma-maison">
        <a href="index.php?cible=mamaison">
            <div>
                Ma maison
            </div>
    </div>
        </a>
            <a href="index.php?cible=indexforum" ><img src="ressources/logo/forum.jpg" class="forum-logo"/></a>

    <div class="header-title">
        <a href="index.php?cible=accueil"><img src="ressources/logo/logodomisep_logo.png"/></a>
        <a href="index.php?cible=accueil"><img src="ressources/logo/logodomisep_logo_texte.png"/></a>

    </div>



    <nav>
        <ul>

            <a href="index.php?cible=nosoffres">
                <li>
                    Offres et Produits
                </li>
            </a>

            <a href="index.php?cible=monabonnement">
                <li>
                    Mon abonnement
                </li>
            </a>
            <a href="index.php?cible=monprofil">
                <li>
                    Mon profil
                </li>
            </a>
            <a href="index.php?cible=logout">
                <li>
                    Déconnexion
                </li>
            </a>
        </ul>
    </nav>

</header>