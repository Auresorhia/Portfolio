<?php

class Auth
{
    private $pdo;
    
    // Constructeur pour initialiser la connexion à la base de données
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Méthode pour vérifier l'identité de l'utilisateur
    public function checkCredentials($username, $password)
    {
        // Préparer la requête pour récupérer l'administrateur avec l'username donné
        $stmt = $this->pdo->prepare("SELECT * FROM admins WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $admin = $stmt->fetch();

        // Si l'admin existe et que le mot de passe est correct
        if ($admin && password_verify($password, $admin['password'])) {
            return $admin;
        }

        return false;  // Si les identifiants sont incorrects
    }
}
?>
