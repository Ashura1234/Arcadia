<?php
require_once("config.php");

try {
    // Utilisation de la configuration pour se connecter à la base de données
    $dsn = 'mysql:host=' . $config['DB_HOST'] . ';dbname=' . $config['DB_NAME'];
    $dbh = new PDO($dsn, $config['DB_USER'], $config['DB_PASS']);
    // Configuration des options PDO pour afficher les erreurs
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données";
} catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
}