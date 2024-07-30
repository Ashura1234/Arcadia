<?php 
require_once(dirname(__FILE__) . "/../config/database.php");

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$prenom = sanitizeInput($_POST["prenom"]);
$nom = sanitizeInput($_POST["nom"]);
$email = filter_var(sanitizeInput($_POST["email"]), FILTER_VALIDATE_EMAIL);
$password = md5($_POST["password"]);
$role = "client"; // Rôle par défaut

if (!$email) {
    header("Location: /signup?error=Invalid Email");
    exit();
}

try {
    $req = $dbh->prepare("INSERT INTO user (prenom, nom, email, password, role) VALUES (:prenom, :nom, :email, :password, :role)");
    $hashedPassword = password_hash($_POST["password"], PASSWORD_BCRYPT);

$req = $dbh->prepare("INSERT INTO user (prenom, nom, email, mdp, role) VALUES (:prenom, :nom, :email, :mdp, :role)");
$req->bindParam(":prenom", $_POST["prenom"]);
$req->bindParam(":nom", $_POST["nom"]);
$req->bindParam(":email", $_POST["email"]);
$req->bindParam(":mdp", $hashedPassword);
$req->bindParam(":role", $role);
$role = 'client'; // Valeur par défaut pour le rôle
$req->execute();

    $req->execute();

    header("Location: /signin?success=1");
    exit();
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
