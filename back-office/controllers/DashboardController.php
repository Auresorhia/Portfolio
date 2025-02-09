<?php
require('config/db.php');  // Assure-toi d'inclure le fichier de connexion à la base de données

class DashboardController {
    public function getMessageCount() {
        global $pdo;
        $stmt = $pdo->query("SELECT COUNT(*) AS message_count FROM contact_form");
        $result = $stmt->fetch();
        return $result['message_count'];  // Retourne le nombre de messages
    }
}
