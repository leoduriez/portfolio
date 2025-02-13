<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante

session_destroy(); // Détruit toutes les données de session, déconnectant ainsi l'utilisateur

header('Location: index.php'); // Redirige l'utilisateur vers la page d'accueil après la déconnexion
exit(); // Termine le script pour s'assurer qu'aucun code supplémentaire n'est exécuté après la redirection
?>