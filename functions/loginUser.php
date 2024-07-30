<?php
require_once(dirname(__FILE__) . "/../config/database.php");

try {
    $req = $dbh->prepare("SELECT * FROM user WHERE email = :email");
    $req->bindParam(":email", $_POST["email"]);
    $req->execute();

    $result = $req->fetch(PDO::FETCH_ASSOC);

    if ($result && password_verify($_POST["password"], $result["password"])) {
        // Connexion réussie
        session_start();
        $_SESSION["email"] = $result["email"];
        header("Location: /"); // Redirection vers la page d'accueil
        exit();
    } else {
        // Email ou mot de passe incorrect
        header("Location: /signin?error=1"); // Redirection avec le paramètre d'erreur
        exit();
    }
} catch (PDOException $e) {
    echo "Erreur de base de données : " . $e->getMessage();
}
?>
