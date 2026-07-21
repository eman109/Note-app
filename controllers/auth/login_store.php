<?php

$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$db   = Database::connect();
$stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
$stmt->execute(['email' => $email]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user['password'])) {
    $_SESSION['errors'] = ['Incorrect email or password.'];
    redirect(url('login'));
}

$_SESSION['user_id'] = $user['id'];

redirect(url('/'));