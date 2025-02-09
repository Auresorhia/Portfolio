<?php
require_once(__DIR__ .'/classes/AuthManager.php');  // Inclure la classe AuthManager

// Instancier la classe et appeler la méthode logout
$authManager = new AuthManager();
$authManager->logout();
?>