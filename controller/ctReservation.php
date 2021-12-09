<?php

function MessageErreur($message)
{
    return '<div class="alert alert-danger" role="alert">' . $message . '</div>';
}

function CheckUser($username)
{
    // On instancie un nouveau modele
    $DepuisModele = new modele;

    // On prépare la requête
    $req = "SELECT * FROM utilisateurs WHERE email = '$username'";

    // On exécute la requête
    // Retourne 0 si aucun utilisateur, autre si il y en a
    return count($DepuisModele->executerRequete($req)->fetchAll());
}

function ReservationInscription($username, $password1, $password2)
{
    $username = htmlspecialchars($username);
    if (!empty($username)) {
        if (!empty($password1)) {
            if (!empty($password2)) {
                if ($password1 == $password2) {
                    if (CheckUser($username) < 1) {
                        $date = date("Y-m-d");
                        $password_hash = password_hash($password1, PASSWORD_DEFAULT);

                        // On instancie un nouveau modele
                        $DepuisModele = new modele;

                        // On prépare la requête
                        $req = "INSERT INTO `utilisateurs` (`email`, `motdepasse`, `date_inscription`) VALUES (:email, :motdepasse, :dateinscription)";

                        // On prépare les paramètres de la requete SQL
                        $Values = array(
                            ':email' => $username,
                            ':motdepasse' => $password_hash,
                            ':dateinscription' => $date
                        );

                        // On exécute la requête
                        $DepuisModele->executerRequete($req, $Values);

                        // On returne true, tout s'est bien déroulé.
                        return true;
                    } else {
                        return MessageErreur("Un utilisateur existe déjà avec cet adresse e-mail");
                    }
                } else {
                    return MessageErreur('Les mots de passe ne correspondent pas');
                }
            } else {
                return MessageErreur('Veuillez confirmer votre mot de passe');
            }
        } else {
            return MessageErreur('Veuillez entrer votre mot de passe');
        }
    } else {
        return MessageErreur('Veuillez entrer votre adresse e-mail');
    }
}

function ReservationConnexion($identifiant = null, $mdp = null)
{
    $identifiant = htmlspecialchars($identifiant);
    if ($identifiant == null) {
        return MessageErreur("Identifiant manquant");
    } elseif ($mdp == null) {
        return MessageErreur("Mot de passe manquant");
    } elseif ($identifiant != null && $mdp != null) {
        $DepuisModele = new modele;
        $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM utilisateurs WHERE email = '$identifiant';");
        if ($ReponseBDD->rowCount() == 0) {
            return MessageErreur("Identifiant incorrect");
        } else {
            if (password_verify($mdp, $ReponseBDD->fetch()['motdepasse'])) {
                return true;
            } else {
                return MessageErreur("Mot de passe incorrect");
            }
        }
    }
}