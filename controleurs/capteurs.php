<?php

/**
 * Contrôleur des capteurs
 */

// on inclut le fichier modèle contenant les appels à la BDD
include('./modele/requetes.capteurs.php');

// si la fonction n'est pas définie, on choisit d'afficher l'accueil
if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "capteurs";
} else {
    $function = $_GET['fonction'];
}

switch ($function) {
    
    case 'capteurs':
        //liste des capteurs enregistrés
        
        $vue = "capteurs";
        $title = "Les capteurs";
        
        $entete = "Voici la liste des capteurs déjà enregistrés :";
        
        $liste = recupereTous($bdd, $table);
        
        if(empty($liste)) {
            $alerte = "Aucun capteur enregistré pour le moment";
        }
        
        break;
        
    case 'ajout':
        //Ajouter un nouveau capteur
        
        $title = "Ajouter un capteur";
        $vue = "ajout";
        $alerte = false;
        
        // Cette partie du code est appelée si le formulaire a été posté
        if (isset($_POST['name']) and isset($_POST['type'])) {
            
            if( !estUneChaine($_POST['name'])) {
                $alerte = "Le nom du capteur doit être une chaîne de caractère.";
                
            } else if( !estUneChaine($_POST['type'])) {
                $alerte = "Le type du capteur doit être une chaîne de caractère.";
                
            } else {
                
                $values =  [
                    'name' => $_POST['name'],
                    'type' => $_POST['type']
                ];
                
                // Appel à la BDD à travers une fonction du modèle.
                $retour = insertion($bdd, $values, $table);
                
                if ($retour) {
                    $alerte = "Ajout réussie";
                } else {
                    $alerte = "L'ajout dans la BDD n'a pas fonctionné";
                }
            }
        }
        
        break;
        
    case 'recherche':
        // chercher des capteurs par type
        
        $title = "Rechercher des capteurs";
        $alerte = false;
        $vue = "recherche";
        
        // Cette partie du code est appelée si le formulaire a été posté
        if (isset($_POST['type'])) {
            
            if( !estUneChaine($_POST['type'])) {
                $alerte = "Le type du capteur doit être une chaîne de caractère.";
                
            } else {
                
                $liste = rechercheParType($bdd, $table, $_POST['type']);
                
                if(empty($liste)) {
                    $alerte = "Aucun capteur ne correspond à votre recherche";
                }
            }
        }
        
        break;
        
    default:
        // si aucune fonction ne correspond au paramètre function passé en GET
        $vue = "erreur404";
        $title = "error404";
        $message = "Erreur 404 : la page recherchée n'existe pas.";
}

include ('vues/header.php');
include ('vues/' . $vue . '.php');
include ('vues/footer.php');
