<?php
session_start();
require_once 'includes/config.php';

// Vérifier si le fichier de base de données existe
if (!file_exists(DB_PATH)) {
    header('Location: install.php');
    exit();
}

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Si l'utilisateur est authentifié et la base de données existe, afficher le contenu principal
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
    <h1>Bienvenue dans l'application</h1>
    <form id="logout" style="display:inline" action="logout.php" method="get"><button> Se déconnecter </button></form>
    <ul>
        <li><a href="parcelles.php">Gestion des parcelles</a></li>
        <li><a href="engrais.php">Gestion des engrais</a></li>
        <li><a href="phytosanitaires.php">Gestion des produits phytosanitaires</a></li>
        <li><a href="interventions_engrais.php">Application d'engrais</a></li>
        <li><a href="interventions_phyto.php">Application phytosanitaires</a></li>
        <li><a href="rapport-phyto.php">Rapport des interventions phytosanitaires</a></li>
        <li><a href="rapport-engrais.php">Rapport des interventions engrais</a></li>
    </ul>
</body>
</html>
