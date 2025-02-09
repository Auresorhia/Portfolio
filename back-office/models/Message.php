<?php
// models/Message.php

class Message
{
    // Connexion à la base de données
    private static $pdo;

    public static function setDb($pdo)
    {
        self::$pdo = $pdo;
    }

    // Récupérer tous les messages
    public static function getAllMessages()
    {
        // Préparer et exécuter la requête
        $stmt = self::$pdo->query("SELECT * FROM contact_form ORDER BY created_at DESC");
        
        // Récupérer tous les résultats
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ajouter un message (exemple)
    public static function addMessage($nom, $email, $message)
    {
        $stmt = self::$pdo->prepare("INSERT INTO contact_form (nom, email, message, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$nom, $email, $message]);
    }
}
?>
