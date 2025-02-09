<?php

class FormulaireManager
{
    private $pdo;

    // Constructeur pour initialiser la connexion à la base de données
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Méthode pour supprimer un formulaire par ID
    public function supprimerFormulaire($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM contact_form WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
