<?php

// requêtes génériques pour récupérer les données de la BDD

// Appel du fichier déclarant PDO
include("modele/connexion.php"); 

/**
 * Récupère tous les éléments d'une table
 * @param PDO $bdd
 * @param string $table
 * @return array
 */
function recupereTous(PDO $bdd, string $table): array {
    $query = 'SELECT * FROM ' . $table;
    return $bdd->query($query)->fetchAll();
}

/**
 * Recherche des éléments en fonction des attributs passés en paramètre
 * @param PDO $bdd
 * @param string $table
 * @param array $attributs
 * @return array
 */
function recherche(PDO $bdd, string $table, array $attributs): array {
    
    $where = "";
    foreach($attributs as $key => $value) {
        $where .= "$key = :$key" . ", ";
    }
    $where = substr_replace($where, '', -2, 2);
    
    $statement = $bdd->prepare('SELECT * FROM ' . $table . ' WHERE ' . $where);
    
    
    foreach($attributs as $key => $value) {
        $statement->bindParam(":$key", $value);
    }
    $statement->execute();
    
    return $statement->fetchAll();
    
}

/**
 * Insère un nouvel élément dans une table
 * @param PDO $bdd
 * @param array $values
 * @param string $table
 * @return boolean
 */
function insertion(PDO $bdd, array $values, string $table): bool {

    $attributs = '';
    $valeurs = '';
    foreach ($values as $key => $value) {

        $attributs .= $key . ', ';
        $valeurs .= ':' . $key . ', ';
        $v[] = $value;
    }
    $attributs = substr_replace($attributs, '', -2, 2);
    $valeurs = substr_replace($valeurs, '', -2, 2);

    $query = ' INSERT INTO ' . $table . ' (' . $attributs . ') VALUES (' . $valeurs . ')';
    
    $donnees = $bdd->prepare($query);
    $requete = "";
    foreach ($values as $key => $value) {
        $requete = $requete . $key . ' : ' . $value . ', ';
        $donnees->bindParam($key, $values[$key], PDO::PARAM_STR);
    }

    return $donnees->execute();
}

?>