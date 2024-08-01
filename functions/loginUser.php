<?php
require_once(dirname(__FILE__) . "/../config/database.php");
$passwordTohash = $_POST["password"] . $config["SECRET_KEY"];
$hashedPassword = md5($passwordTohash);  // Hacher le mot de passe

try {
    // Préparez la requête pour récupérer l'utilisateur par email
    $req = $dbh->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
    $req->bindParam(":email", $_POST["email"]);
    $req->bindParam(":password", $hashedPassword);
    $req->execute();

    $result = $req->fetch(PDO::FETCH_ASSOC);

    // Vérifiez si un utilisateur a été trouvé et si le mot de passe est correct
    if ($result) {
        session_start();
        $_SESSION["email"] = $result["email"];
        header("Location: /?message=connexion reussie"); // Rediriger vers la page d'accueil
        exit();
    } else {
        // Si l'email ou le mot de passe est incorrect
        header("Location: /signin?error=incorecte"); // Rediriger vers la page de connexion avec une erreur
        exit();
    }
} catch (PDOException $e) {
    // Gérer les erreurs de base de données
    echo "Erreur de base de données : " . $e->getMessage();
}
?>
