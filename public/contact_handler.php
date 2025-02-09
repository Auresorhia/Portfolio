<?php
// Inclure le fichier de la classe ContactForm et la connexion à la base de données
require_once('../back-office/config/db.php');
require_once('../back-office/classes/ContactForm.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer et nettoyer les données du formulaire
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Créer une instance de la classe ContactForm
    $contactForm = new ContactForm($pdo);

    // Validation des champs
    if (empty($nom) || empty($email) || empty($message)) {
        header("Location: contact.php?error=empty");
        exit();
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=email");
        exit();
    }
    
    // Vérifier que le message contient au moins une phrase complète (un espace entre les mots)
    if (!preg_match('/\s+/', $message)) {
        header("Location: contact.php?error=message");
        exit();
    }

    // Si la validation réussit, enregistrer les données dans la base
    if ($contactForm->saveFormData($nom, $email, $message)) {
        header("Location: contact.php?success=1");
        exit();
    } else {
        header("Location: contact.php?error=db");
        exit();
    }
}
?>
