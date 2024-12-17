<?php
require_once 'config.php';

function getDB() {
    try {
        $db = new SQLite3(DB_PATH);
        $db->enableExceptions(true);
        return $db;
    } catch (Exception $e) {
        if (DEBUG_MODE) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        } else {
            die("Une erreur est survenue lors de la connexion à la base de données.");
        }
    }
}
?>