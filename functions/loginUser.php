<?php
require_once(dirname(__FILE__) . "/../config/database.php");

$req = $dbh->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
$req->bindParam(":email", $_POST["email"]);
$req->bindParam(":password", $_POST["password"]);
$req->execute();

$result = $req->fetch(PDO::FETCH_ASSOC);
if ($result) {
    // Login successful
    session_start();
    $_SESSION["email"] = $result["email"];
    header("Location: /"); // Redirect to the home page
    exit();
} else {
    // Invalid email or password
    header("Location: /signin?error=1"); // Redirect with error parameter
} 
?>