<?php
session_start();

// Inclure le fichier de la classe Auth
require_once('./classes/Auth.php');
require_once('./config/db.php');  // Connexion à la base de données

// Si l'admin est déjà connecté, rediriger vers le dashboard
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: views/dashboard.php");
    exit();
}

$error = ""; // Variable pour stocker les erreurs

// Si la méthode est POST, vérifier les identifiants
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    // Vérification que les champs ne sont pas vides
    if (!empty($login) && !empty($password)) {
        // Créer une instance de la classe Auth pour vérifier les identifiants
        $auth = new Auth($pdo);
        $admin = $auth->checkCredentials($login, $password);

        if ($admin) {
            // Connexion réussie
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_username'] = $admin['username'];

            header("Location: views/dashboard.php");
            exit();
        } else {
            // Message d'erreur générique
            $error = "Identifiants incorrects.";
        }
    } else {
        $error = "Veuillez remplir tous les champs.";
    }
}
?>

<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez Aurélie Lao via ce formulaire simple et rapide.">
    <meta name="author" content="Aurélie Lao">
    <meta name="theme-color" content="#9b87f5">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="URL_DE_VOTRE_PAGE">
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="../public/css/contact.css">
</head>
<body>
    <main class="container">
        <section class="carre-noirblanc" aria-label="Formulaire de contact">
            <!-- Section de bienvenue -->
            <header class="carre1">
                <div class="welcome-text">
                    <p id="hesite-pas">Bienvenu Admin</p>
                    <h1 class="name">Gérons ça !</h1>
                </div>
            </header>
            
            <!-- Section du formulaire -->
            <section class="carre2">

                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
                
                <!-- Titre du formulaire -->

                
                <!-- Formulaire -->
                <form method="POST" action="index.php">
                <h2 class="contacte-moi">Connectez-vous Admin</h2>
                    
                    <label for="login">Nom d'utilisateur :</label>
                    <input type="text" name="login" id="login">
                    
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password">
                    
                    <button 
                            type="submit" 
                            class="btn-submit"
                            aria-label="Envoyer le message"
                        >
                            Se connecter
                        </button>
                    
                    <?php if (!empty($error)) { echo "<p class='error' style='color:red'>$error</p>"; } ?>
                </form>
            </section>
        </section>
    </main>
    <script src="/php/portfolio/public/asset/js/contact.js"></script>
</body>
</html>