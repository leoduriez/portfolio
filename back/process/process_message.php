<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante

require_once '../config/Database.php'; // Inclut la classe Database pour établir une connexion à la base de données
require_once '../models/Message.php';    // Inclut le modèle Message pour interagir avec les messages dans la base de données

$database = new Database(); // Crée une nouvelle instance de la classe Database
$db = $database->getConnection(); // Établit la connexion à la base de données
$messageModel = new Message($db); // Instancie le modèle Message avec la connexion à la base de données

// Traitement de l'ajout de message
if ($_SERVER["REQUEST_METHOD"] === "POST") { // Vérifie si la requête est de type POST
    // Vérifier que tous les champs sont remplis
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        // Redirection avec un message d'erreur si des champs sont vides
        header("Location: ../../index.php?error=Tous les champs doivent être remplis#contact");
        exit; // Termine le script après la redirection
    }

    // Nettoyage et validation des entrées utilisateur
    $name = trim(strip_tags($_POST['name'])); // Nettoie le nom
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // Valide l'adresse email
    $message = trim(strip_tags($_POST['message'])); // Nettoie le message

    // Vérifie si l'email est valide
    if (!$email) {
        // Redirection avec un message d'erreur si l'email est invalide
        header("Location: ../../index.php?error=Adresse email invalide#contact");
        exit; // Termine le script après la redirection
    }

    try {
        // Assigner les valeurs aux propriétés de l'objet Message
        if ($messageModel->create($name, $email, $message)) {
            // Redirection vers la page principale en cas de succès
            header("Location: ../../index.php?success=true#contact");
            exit; // Termine le script après la redirection
        } else {
            // Redirection en cas d'erreur lors de l'envoi du message
            header("Location: ../../index.php?error=Erreur lors de l'envoi#contact");
            exit; // Termine le script après la redirection
        }
    } catch (Exception $e) {
        // Gestion d'erreur serveur
        header("Location: ../../index.php?error=Erreur serveur : " . urlencode($e->getMessage()) . "#contact");
        exit; // Termine le script après la redirection
    }
} else {
    // Redirection en cas de méthode incorrecte (non POST)
    header("Location: ../../index.php");
    exit; // Termine le script après la redirection
}
?>