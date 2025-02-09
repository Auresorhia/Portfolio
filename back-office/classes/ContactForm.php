<?php

class ContactForm
{
    private $pdo;

    // Constructeur qui initialise la connexion à la base de données
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Méthode pour valider les données du formulaire
    public function validateFormData($nom, $email, $message)
    {
        // Nettoyage des données
        $nom = htmlspecialchars(trim($nom));
        $email = htmlspecialchars(trim($email));
        $message = htmlspecialchars(trim($message));

        // Vérification des champs requis
        if (empty($nom) || empty($email) || empty($message)) {
            return false;  // Si un champ est vide, retourner false
        }

        return true;  // Si tous les champs sont remplis, retourner true
    }

    // Méthode pour enregistrer les données dans la base de données
    public function saveFormData($nom, $email, $message)
    {
        try {
            // Préparer la requête d'insertion dans la base de données
            $stmt = $this->pdo->prepare("INSERT INTO contact_form (nom, email, message, created_at) VALUES (?, ?, ?, NOW())");

            // Exécuter la requête avec les données du formulaire
            $stmt->execute([$nom, $email, $message]);

            // Vérifier si l'insertion a réussi
            if ($stmt->rowCount() > 0) {
                return true; // Si au moins une ligne a été insérée
            } else {
                throw new Exception('Aucune ligne insérée.');
            }
        } catch (Exception $e) {
            // Enregistrer l'erreur dans les logs
            error_log("Erreur lors de l'insertion des données : " . $e->getMessage());
            return false; // Retourne false si une exception est lancée
        }
    }
}

?>
