<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante

require 'config/Database.php'; // Inclut la classe Database pour établir une connexion à la base de données

// Vérifie si la méthode de la requête est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Récupère l'username soumis par l'utilisateur
    $password = $_POST['password']; // Récupère le mot de passe soumis par l'utilisateur

    try {
        $db = new Database(); // Crée une nouvelle instance de la classe Database
        $pdo = $db->getConnection(); // Établit la connexion à la base de données
        
        // Prépare une requête SQL pour sélectionner l'utilisateur par username
        $sql = "SELECT * FROM user WHERE username = :username";
        $stmt = $pdo->prepare($sql); // Prépare la requête
        $stmt->execute(['username' => $username]); // Exécute la requête avec l'username fourni
        $user = $stmt->fetch(); // Récupère l'utilisateur correspondant

        // Vérifie si l'utilisateur existe et si le mot de passe est correct
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user; // Stocke les informations de l'utilisateur dans la session
            $_SESSION['admin_logged_in'] = true; // Définit la variable de session admin_logged_in
            header('Location: views/admin_messages.php'); // Redirige vers la page d'administration
            exit(); // Termine le script
        } else {
            // Détermine le type d'erreur (mot de passe ou username incorrect)
            $error = ($user) ? 'password' : 'username';
            header('Location: index.php?error=' . $error); // Redirige vers la page de connexion avec un message d'erreur
            exit(); // Termine le script
        }
    } catch(PDOException $e) {
        // En cas d'erreur de connexion à la base de données
        header('Location: index.php?error=database'); // Redirige vers la page de connexion avec un message d'erreur
        exit(); // Termine le script
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Administration</title> <!-- Titre de la page -->
    <link rel="stylesheet" href="assets/css/login.css"> <!-- Lien vers la feuille de style CSS -->
</head>
<body>
    <div class="login-container"> <!-- Conteneur pour le formulaire de connexion -->
        <h1>Administration</h1> <!-- Titre de la section -->

        <?php if (isset($_GET['error'])): ?> <!-- Vérifie si un message d'erreur est présent dans l'URL -->
            <div class="error"> <!-- Conteneur pour afficher les messages d'erreur -->
                <?php 
                    switch($_GET['error']) { // Vérifie le type d'erreur
                        case 'password':
                            echo "Mot de passe incorrect"; // Message d'erreur pour mot de passe incorrect
                            break;
                        case 'username':
                            echo "Username incorrect"; // Message d'erreur pour username incorrect
                            break;
                        case 'database':
                            echo "Erreur de connexion à la base de données"; // Message d'erreur pour problème de connexion à la base de données
                            break;
                    }
                ?>
            </div>
        <?php endif; ?>

        <form method="POST" action=""> <!-- Formulaire pour la connexion -->
            <div class="form-group">
                <label for="username">Username</label> <!-- Label pour le champ username -->
                <input type="username" id="username" name="username" required> <!-- Champ pour saisir l'username -->
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label> <!-- Label pour le champ mot de passe -->
                <input type="password" id="password" name="password" required> <!-- Champ pour saisir le mot de passe -->
            </div>
            <button type="submit">Se connecter</button> <!-- Bouton pour soumettre le formulaire -->
        </form>
    </div>
</body>
</html>