<?php
// Fonction qui va chercher la liste des avis de tous les utilisateurs
function getAvisTexte()
{
        $DepuisModele = new modele;
        $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM temoignages WHERE type='Texte' ORDER BY RAND()");
        $ListeDesAvis = $ReponseBDD->fetchAll();
        foreach ($ListeDesAvis as $unAvis)
        {
            require 'view/vueAvisTexte.php';

        }
}


function getAvisImage()
{
        $DepuisModele = new modele;
        $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM temoignages WHERE type='Image'");
        $ListeDesAvis = $ReponseBDD->fetchAll();
        foreach ($ListeDesAvis as $unAvis)
        {
            require 'view/VueAvisImage.php';

        }
}
