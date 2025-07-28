<?php
session_start();
require '../includes/db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

try {
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && $password == $user['senha']) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user_id'] = $user['id'];
        $_SESSION['admin_user_email'] = $user['email'];
        header('Location: index.php');
        exit;
    } else {
        header('Location: login.php?error=1');
        exit;
    }
} catch (PDOException $e) {
    die("Erro ao autenticar: " . $e->getMessage());
}