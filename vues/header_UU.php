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
    <link rel="stylesheet" type="text/css" href="vues/CSS/header_UU.css">
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

            <a id="test" href="index.php?cible=nosoffres">
                <li id="test1">
                    Offres et Produits
                </li>
            </a>

        </ul>

    </nav>

</header>

</body>