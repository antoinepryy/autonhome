<?php

/**
 * Fonctions liées à l'affichage
 */

/**
 * Génère le code HTML d'affichage d'une alerte
 * @param string|null $alerte
 */
function AfficheAlerte(string $alerte) {
    
    if(!is_null($alerte) && !empty($alerte)) {
        return "<p><strong><i> Alerte : {$alerte}</i></strong></p>";
    }
}

function getValue ($data) {
    $taille_tab = count($data);
    $tab = array();
    for($i=0;$i < $taille_tab;$i++)
    {
        $tab[$i] = $data[$i][0];
    }
    return($tab);
}
function getDateTime ($data) {
    $taille_tab = count($data);
    $tab = array();
    for($i=0;$i < $taille_tab;$i++)
    {
        $tab[$i] = $data[$i][1];
    }
    return($tab);
}
