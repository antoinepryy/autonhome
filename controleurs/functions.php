<?php
/**
 * Fonctions liées aux contrôleurs
 */


/**
 * Détermine si le paramètre est un entier ou non
 * @param mixed $int
 * @return bool
 */
function isInteger($int): bool
{
    return is_numeric($int);
}

/**
 * Détermine si le paramètre est une string ou non
 * 
 * @param mixed $chaine
 * @return bool
 */
function isString($chaine): bool
{
    if (empty($chaine)) {
        return false;

    } else {
        return is_string($chaine);
    }
}

function isPassword($chaine): bool
{
    if (empty($chaine) || strlen($chaine) < 8) {
        return false;
    } else {
        return is_string($chaine);
    }
}

function isLoggedAsUser(): bool
{
    if ($_SESSION["type"]=="user") {
        return true;
    } else {
        return false;
    }
}

function isLoggedAsAdmin(): bool
{
    if ($_SESSION["type"]=="admin") {
        return true;
    } else {
        return false;
    }
}

function isLogged(): bool
{
    if ($_SESSION["type"]=="user" || $_SESSION["type"]=="admin") {
        return true;
    } else {
        return false;
    }
}

