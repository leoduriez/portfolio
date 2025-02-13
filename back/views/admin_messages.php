<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante

require_once '../config/Database.php'; // Inclut la classe Database pour établir une connexion à la base de données
require_once '../models/Projet.php';    // Inclut le modèle Projet pour interagir avec les projets dans la base de données
require_once '../models/Message.php';    // Inclut le modèle Message pour interagir avec les messages dans la base de données

// Vérification de l'authentification
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../index.php');
    exit();
}

$database = new Database(); // Crée une nouvelle instance de la classe Database
$db = $database->getConnection(); // Établit la connexion à la base de données
$projet = new Projet($db); // Instancie le modèle Projet avec la connexion à la base de données
$messageModel = new Message($db); // Instancie le modèle Message avec la connexion à la base de données

// Traitement de l'ajout de projet
if (isset($_POST['ajouter_projet'])) { // Vérifie si le formulaire d'ajout de projet a été soumis
    $Titre = htmlspecialchars($_POST['Titre']); // Échappe les caractères spéciaux dans le titre
    $Description = htmlspecialchars($_POST['Description']); // Échappe les caractères spéciaux dans la description
    $Date = $_POST['date']; // Récupère la date
    $Lien = htmlspecialchars($_POST['lien']); // Échappe le lien

    // Gestion de l'image téléchargée
    $imagePath = ''; // Initialisation du chemin de l'image
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/../../uploads/'; // Chemin absolu vers le dossier uploads
        
        // Créer le dossier uploads s'il n'existe pas
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileName = uniqid() . '_' . $fileName; // Ajouter un identifiant unique pour éviter les conflits
        $imagePath = '/uploads/' . $fileName; // Chemin relatif pour la base de données
        $fullPath = $uploadDir . $fileName; // Chemin complet pour le déplacement
        
        if (!move_uploaded_file($fileTmpPath, $fullPath)) {
            echo "Erreur lors du téléchargement de l'image.";
        }
    }

    // Gestion du fichier téléchargé
    $filePath = '';
    if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/../../uploads/'; // Chemin absolu vers le dossier uploads
        
        // Créer le dossier uploads s'il n'existe pas
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        $fileTmpPath = $_FILES['fichier']['tmp_name'];
        $fileName = $_FILES['fichier']['name'];
        $fileName = uniqid() . '_' . $fileName; // Ajouter un identifiant unique pour éviter les conflits
        $filePath = '/uploads/' . $fileName; // Chemin relatif pour la base de données
        $fullPath = $uploadDir . $fileName; // Chemin complet pour le déplacement
        
        if (!move_uploaded_file($fileTmpPath, $fullPath)) {
            echo "Erreur lors du téléchargement du fichier.";
        }
    }

    // Appelle la méthode create du modèle Projet pour ajouter le projet à la base de données
    if ($projet->create($Titre, $Description, $imagePath, $Date, $Lien, $filePath)) {
        echo "Projet ajouté avec succès."; // Message de succès
    } else {
        echo "Erreur lors de l'ajout du projet."; // Message d'erreur
    }
}

// Traitement de la suppression de projet
if (isset($_GET['action']) && $_GET['action'] == 'supprimer' && isset($_GET['id'])) { // Vérifie si une action de suppression a été demandée
    $id = $_GET['id']; // Récupère l'ID du projet à supprimer
    if ($projet->delete($id)) {
        echo "Projet supprimé avec succès."; // Message de succès
    } else {
        echo "Erreur lors de la suppression du projet."; // Message d'erreur
    }
}

// Traitement de la suppression de message
if (isset($_GET['action']) && $_GET['action'] == 'supprimer_message' && isset($_GET['id'])) { // Vérifie si une action de suppression de message a été demandée
    $id = $_GET['id']; // Récupère l'ID du message à supprimer
    if ($messageModel->delete($id)) {
        echo "Message supprimé avec succès."; // Message de succès
    } else {
        echo "Erreur lors de la suppression du message."; // Message d'erreur
    }
}

// Récupération de tous les projets
$projets = $projet->readAll(); // Appelle la méthode readAll du modèle Projet pour récupérer tous les projets

// Récupération de tous les messages
$messages = $messageModel->readAll(); // Appelle la méthode readAll du modèle Message pour récupérer tous les messages
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Projets et Messages</title>
    <link rel="stylesheet" href="../assets/css/admin.css"> <!-- Lien vers la feuille de style CSS -->
</head>
<body>

    <header>
        <div class="logo">
                <img src="../assets/images/logo_portfolio_noir.webp" alt="Logo Portfolio"> <!-- Logo du portfolio -->
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../../index.php">Retour au Portfolio</a></li> <!-- Lien vers la page d'accueil -->
                <li><a href="../logout.php">Déconnexion</a></li> <!-- Lien pour se déconnecter -->
            </ul>
        </nav>
    </header>

    <h1>Gestion des Projets</h1>

    <form method="POST" action="admin_messages.php" enctype="multipart/form-data"> <!-- Formulaire pour ajouter un projet -->
        <div class="form-group">
            <label for="Titre">Titre du projet</label>
            <input type="text" id="Titre" name="Titre" required> <!-- Champ pour le titre du projet -->
        </div>
        <div class="form-group">
            <label for="Description">Description du projet</label>
            <textarea id="Description" name="Description" required></textarea> <!-- Champ pour la description du projet -->
        </div>
        <div class="form-group">
            <label for="image">Image du projet</label>
            <input type="file" id="image" name="image" accept="image/*" required> <!-- Champ pour télécharger une image -->
        </div>
        <div class="form-group">
            <label for="date">Date du projet</label>
            <input type="date" id="date" name="date" required> <!-- Champ pour la date -->
        </div>
        <div class="form-group">
            <label for="lien">Lien du projet</label>
            <input type="url" id="lien" name="lien" required> <!-- Champ pour le lien -->
        </div>
        <div class="form-group">
            <label for="fichier">Fichier du projet (laisser vide pour conserver l'ancien)</label>
            <input type="file" id="fichier" name="fichier" accept=".zip,.pdf,.docx"> <!-- Champ pour télécharger un fichier -->
        </div>
        <button type="submit" name="ajouter_projet">Ajouter Projet</button> <!-- Bouton pour soumettre le formulaire -->
    </form>

    <h2>Liste des Projets</h2>
    <table border="1" cellpadding="10"> <!-- Table pour afficher la liste des projets -->
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Image</th>
            <th>Date</th>
            <th>Lien</th>
            <th>Fichier</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $projets->fetch(PDO::FETCH_ASSOC)): ?> <!-- Boucle pour afficher chaque projet -->
            <tr>
                <td><?= htmlspecialchars($row['Titre']); ?></td> <!-- Affiche le titre du projet -->
                <td><?= htmlspecialchars($row['Description']); ?></td> <!-- Affiche la description du projet -->
                <td>
                    <?php if (!empty($row['Image'])): ?> <!-- Vérifie si une image est associée -->
                        <img src="<?= htmlspecialchars($row['Image']); ?>" alt="Image du projet" style="width:100px;height:auto;"> <!-- Affiche l'image du projet -->
                    <?php else: ?>
                        Pas d'image associée
                    <?php endif; ?>
                </td>
                <td><?= htmlspecialchars($row['Date'] ?? 'Aucune date'); ?></td> <!-- Affiche la date du projet ou 'Aucune date' si la date est nulle -->
                <td><a href="<?= htmlspecialchars($row['Lien']); ?>" target="_blank">Voir le projet</a></td> <!-- Lien pour voir le projet -->
                <td>
                    <?php if (!empty($row['Fichier'])): ?> <!-- Vérifie si un fichier est associé -->
                        <a href="<?= htmlspecialchars($row['Fichier']); ?>" target="_blank">Télécharger le fichier</a> <!-- Lien pour télécharger le fichier -->
                    <?php else: ?>
                        Pas de fichier associé
                    <?php endif; ?>
                </td>
                <td>
                    <a href="admin_messages.php?action=modifier&id=<?= $row['id']; ?>">Modifier</a> <!-- Lien pour modifier le projet -->
                    <a href="admin_messages.php?action=supprimer&id=<?= $row['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?');">Supprimer</a> <!-- Lien pour supprimer le projet avec confirmation -->
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h2>Messages Reçus</h2>
    <table border="1" cellpadding="10"> <!-- Table pour afficher la liste des messages reçus -->
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $messages->fetch(PDO::FETCH_ASSOC)): ?> <!-- Boucle pour afficher chaque message -->
            <tr>
                <td><?= htmlspecialchars($row['name']); ?></td> <!-- Affiche le nom de l'expéditeur -->
                <td><?= htmlspecialchars($row['email']); ?></td> <!-- Affiche l'email de l'expéditeur -->
                <td><?= htmlspecialchars($row['message']); ?></td> <!-- Affiche le contenu du message -->
                <td>
                    <a href="admin_messages.php?action=supprimer_message&id=<?= $row['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');">Supprimer</a> <!-- Lien pour supprimer le message avec confirmation -->
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>