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
    <title>Contactez Aurélie Lao</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <main class="container">
        <section class="carre-noirblanc" aria-label="Formulaire de contact">
            <!-- Section de bienvenue -->
            <header class="carre1">
                <div class="welcome-text">
                    <p id="hesite-pas">N'hésitez pas !</p>
                    <h1 class="name">Aurélie Lao</h1>
                </div>
            </header>
            
            <!-- Section du formulaire -->
            <section class="carre2">
                <!-- Bouton fermer -->
                <button type="button" class="fermer" aria-label="Fermer le formulaire">
                    <span class="croix" aria-hidden="true">
                        <span class="branche branche1"></span>
                        <span class="branche branche2"></span>
                    </span>
                </button>

                <div class="theme" aria-label="Changer le thème">
                    <div type="button" class="logo" aria-hidden="true">
                            <div id="mode"></div>
                    </div>
                </div>
                
                <!-- Titre du formulaire -->
                <h2 class="contacte-moi">Contactez-moi</h2>
                
                <!-- Formulaire -->
                <div class="cellules">
                    <form method="post" action="contact_handler.php" novalidate>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                placeholder="Votre email" 
                                required 
                                autocomplete="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            >
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input 
                                type="text" 
                                id="nom" 
                                name="nom" 
                                placeholder="Votre nom" 
                                required 
                                autocomplete="given-name"
                                minlength="2"
                                maxlength="50"
                            >
                        </div>


                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                placeholder="Votre message..." 
                                required 
                                minlength="10"
                                maxlength="1000"
                                rows="5"
                            ></textarea>
                        </div>

                        <button 
                            type="submit" 
                            class="btn-submit"
                            aria-label="Envoyer le message"
                        >
                            Envoyer
                        </button>
                    </form>
                </div>
            </section>
        </section>
    </main>
    <script src="contact.js"></script>
</body>
</html>