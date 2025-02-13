<?php
// Importation des dépendances nécessaires
require_once "../models/Message.php";    // Modèle pour la gestion des messages
require_once "../config/Database.php";   // Configuration de la base de données

class MessageController {
    // Propriétés privées de la classe
    private $db;        // Instance de connexion à la base de données
    private $message;   // Instance du modèle Message

    // Constructeur : initialise les connexions et dépendances
    public function __construct($db) {
        $this->db = $db;                    // Stocke la connexion à la BDD
        $this->message = new Message($db);   // Crée une instance du modèle
    }

    // Méthode pour ajouter un nouveau message
    public function addMessage($name, $email, $messageText) {
        try {
            // Nettoyage et sécurisation des données entrantes
            $this->message->name = htmlspecialchars(strip_tags($name));
            $this->message->email = htmlspecialchars(strip_tags($email));
            $this->message->message = htmlspecialchars(strip_tags($messageText));
            
            // Création du message dans la base de données
            return $this->message->create();
        } catch (Exception $e) {
            // Gestion des erreurs avec message explicite
            return ["error" => "Impossible d'ajouter le message : " . $e->getMessage()];
        }
    }

    // Méthode pour récupérer tous les messages
    public function getMessages() {
        try {
            // Récupération de tous les messages via le modèle
            return $this->message->readAll();
        } catch (Exception $e) {
            // Gestion des erreurs avec message explicite
            return ["error" => "Impossible de récupérer les messages : " . $e->getMessage()];
        }
    }

    // Méthode pour supprimer un message spécifique
    public function deleteMessage($id) {
        try {
            // Suppression du message via le modèle
            return $this->message->delete($id);
        } catch (Exception $e) {
            // Gestion des erreurs avec message explicite
            return ["error" => "Impossible de supprimer le message : " . $e->getMessage()];
        }
    }
}
?>
