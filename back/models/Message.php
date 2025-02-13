<?php
class Message {
    private $conn; // Propriété pour stocker l'instance de connexion à la base de données
    private $table_name = "messages"; // Nom de la table dans la base de données

    // Constructeur de la classe Message
    public function __construct($db) {
        $this->conn = $db; // Initialise la connexion à la base de données
    }

    // Méthode pour créer un nouveau message
    public function create($name, $email, $message) {
        // Prépare la requête SQL pour insérer un message
        $query = "INSERT INTO " . $this->table_name . " (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $this->conn->prepare($query); // Prépare la requête
        // Lier les paramètres pour éviter les injections SQL
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        return $stmt->execute(); // Exécute la requête et retourne le résultat
    }

    // Méthode pour lire tous les messages
    public function readAll() {
        // Prépare la requête SQL pour sélectionner tous les messages
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query); // Prépare la requête
        $stmt->execute(); // Exécute la requête
        return $stmt; // Retourne l'objet statement contenant les résultats
    }

    // Méthode pour supprimer un message par son ID
    public function delete($id) {
        // Prépare la requête SQL pour supprimer un message
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query); // Prépare la requête
        $stmt->bindParam(":id", $id); // Lier le paramètre ID
        return $stmt->execute(); // Exécute la requête et retourne le résultat
    }
}
?>