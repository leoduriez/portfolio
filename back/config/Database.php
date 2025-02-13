<?php


class Database {
    // Propriétés privées pour stocker les informations de connexion à la base de données
    private $host = "localhost"; // Sur O2Switch, l'hôte est localhost
    private $db_name = "fixi5359_aA9IpYgldurleo"; // Le nom de votre base de données sur O2Switch
    private $username = "fixi5359"; // Votre nom d'utilisateur O2Switch
    private $password = "9f5P-sQNK-DeL)"; // Votre mot de passe O2Switch
    public $conn; // Propriété publique pour stocker l'instance de connexion PDO

    // Méthode pour établir une connexion à la base de données
    public function getConnection() {
        $this->conn = null; // Initialise la connexion à null
        try {
            // Crée une chaîne de connexion DSN pour PDO
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            // Crée une nouvelle instance PDO pour se connecter à la base de données
            $this->conn = new PDO($dsn, $this->username, $this->password);
            // Définit le mode d'erreur de PDO à exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            // Gère les erreurs de connexion en affichant un message d'erreur
            echo "Erreur de connexion : " . $exception->getMessage();
        }
        return $this->conn; // Retourne l'instance de connexion
    }
}
?>