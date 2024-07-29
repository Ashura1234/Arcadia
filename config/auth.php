<?php
require_once("database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $dbh->prepare("SELECT id, email, mdp, role FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['mdp'])) {
        // Générer un token d'authentification (par exemple, un JWT ou un token simple)
        $token = bin2hex(random_bytes(16));
        echo json_encode(['success' => true, 'token' => $token, 'role' => $user['role']]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
    }
}
