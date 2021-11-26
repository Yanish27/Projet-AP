<?php
declare(strict_types=1);

class modele
/*------------------------------------------------------*/
/* Class Modele pour accéder à la DB */
/*------------------------------------------------------*/
{
    // Objet PDO d'accès à la DBB
    private $bdd;

    // Exécute une requête SQL éventuellement paramétrée
    public function executerRequete($sql, $params = null)
    {
        if ($params == null) {
            $resultat = $this->dbconnect()->query($sql); // exécution directe
        } else {
            $resultat = $this->dbconnect()->prepare($sql); // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

    // Connexion à la DB en initialisant l'objet PDO.
    private function dbconnect()
    {
        try {
            $this->bdd = new PDO(
                'mysql:host=localhost;dbname=projet_ap',
                'dba',
                'AP2021',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            return $this->bdd;
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout.
            die('Erreur de connection à la base : ' . $e->getMessage());
        }
    }
}
