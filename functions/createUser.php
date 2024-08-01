<?php 
require_once(dirname(__FILE__) . "/../config/database.php");

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$prenom = sanitizeInput($_POST["prenom"]);
$nom = sanitizeInput($_POST["nom"]);
$email = filter_var(sanitizeInput($_POST["email"]), FILTER_VALIDATE_EMAIL);
$message = "compte créé avec succes";


    // Préparez la requête pour vérifier si l'utilisateur existe déjà
    $req = $dbh->prepare("SELECT * FROM user WHERE email = :email");
    $req->bindParam(":email", $_POST["email"]);
    $req->execute();

    // Récupérez les résultats de la requête
    $result = $req->fetch(PDO::FETCH_ASSOC);

    // Si l'utilisateur existe déjà, redirigez vers la page d'inscription avec un message d'erreur
    if ($result) {
        header("Location: /signup?error=le compte existe déjà"); // Rediriger avec un message d'erreur
        exit();
    }

if (!$result){
    $passwordTohash = $_POST["password"] . $config["SECRET_KEY"];  // Ajouter un sel au mot de passe
    $hashedPassword = md5($passwordTohash);  // Hacher le mot de passe
    $role = $config["ROLE"][0]; // Rôle par défaut
    try {
        $req = $dbh->prepare("INSERT INTO user (prenom, nom, email, password, role) VALUES (:prenom, :nom, :email, :password, :role)");
        $req->bindParam(":prenom", $prenom);
        $req->bindParam(":nom", $nom);
        $req->bindParam(":email", $email);
        $req->bindParam(":password", $hashedPassword);  // Utilisez :password pour lier le mot de passe
        $req->bindParam(":role", $role);
        $req->execute();
    
        header("Location: /signin?message=$message&type=sucess");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }    
}


?>
