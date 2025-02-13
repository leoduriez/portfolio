<?php
class Projet {
    private $conn; // Propriété pour stocker l'instance de connexion à la base de données
    private $table_name = "projets"; // Nom de la table dans la base de données

    // Constructeur de la classe Projet
    public function __construct($db) {
        $this->conn = $db; // Initialise la connexion à la base de données
    }

    // Méthode pour créer un nouveau projet
    public function create($Titre, $Description, $Image, $Date, $Lien, $Fichier) {
        // Prépare la requête SQL pour insérer un projet
        $query = "INSERT INTO " . $this->table_name . " 
                 (Titre, Description, Image, Date, Lien, Fichier) 
                 VALUES 
                 (:Titre, :Description, :Image, :Date, :Lien, :Fichier)";
        
        $stmt = $this->conn->prepare($query);
        
        // Lier les paramètres
 $stmt->bindParam(':Titre', $Titre);
        $stmt->bindParam(':Description', $Description);
        $stmt->bindParam(':Image', $Image);
        $stmt->bindParam(':Date', $Date);
        $stmt->bindParam(':Lien', $Lien);
        $stmt->bindParam(':Fichier', $Fichier);
        
        return $stmt->execute();
    }

    // Méthode pour lire tous les projets
    public function readAll() {
        // Prépare la requête SQL pour sélectionner tous les projets
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query); // Prépare la requête
        $stmt->execute(); // Exécute la requête
        return $stmt; // Retourne l'objet statement contenant les résultats
    }

    // Méthode pour lire un projet par son ID
    public function readById($id) {
        // Prépare la requête SQL pour sélectionner un projet spécifique
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query); // Prépare la requête
        $stmt->bindParam(':id', $id); // Lier le paramètre ID
        $stmt->execute(); // Exécute la requête
        return $stmt; // Retourne l'objet statement contenant le projet
    }

    // Méthode pour mettre à jour un projet
    public function update($id, $Titre, $Description) {
        // Prépare la requête SQL pour mettre à jour un projet
        $query = "UPDATE " . $this->table_name . " SET Titre = :Titre, Description = :Description WHERE id = :id";
        $stmt = $this->conn->prepare($query); // Prépare la requête
        // Lier les paramètres
        $stmt->bindParam(':id', $id); // Lier le paramètre ID
        $stmt->bindParam(':Titre', $Titre); // Lier le titre
        $stmt->bindParam(':Description', $Description); // Lier la description
        return $stmt->execute(); // Exécute la requête et retourne le résultat
    }

    // Méthode pour supprimer un projet par son ID
    public function delete($id) {
        // Prépare la requête SQL pour supprimer un projet
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query); // Prépare la requête
        $stmt->bindParam(':id', $id); // Lier le paramètre ID
        return $stmt->execute(); // Exécute la requête et retourne le résultat
    }
}
?>