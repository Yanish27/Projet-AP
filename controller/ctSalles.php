<?php
// Fonction qui va chercher la liste des salles pour les afficher 
function getSallesPresentation()
{
        $DepuisModele = new modele;
        $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM Salles");
        $ListeSalles = $ReponseBDD->fetchAll();
        foreach ($ListeSalles as $UneSalle)
        {
            set_include_path("/var/www/html/");
            require 'view/vueSalles.php';

        }
}
