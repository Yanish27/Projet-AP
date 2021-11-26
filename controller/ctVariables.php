<?php
// Fonction qui retourne la valeur d'une variable
function getValueVariable($cle = "")
{
    if (!empty($cle)) {
        $DepuisModele = new modele;
        $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM IVariables WHERE CLE = '$cle'");
        return $ReponseBDD->fetch()[1];
    } else {
        return "Erreyr : getValueVaraible() -> Pas d'arguments.";
    }
}
