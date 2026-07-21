<?php

$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$errors = [];

if (empty($email)) {
    $errors[] = 'Email is required.';
}
if (empty($password)) {
    $errors[] = 'Password is required.';
} elseif (strlen($password) < 8) {
    $errors[] = 'Password must be at least 8 characters.';
}

$db = Database::connect();

if (empty($errors)) {
    $stmt = $db->prepare('SELECT id FROM users WHERE email = :email');
    $stmt->execute(['email'=>$email]);
    if ($stmt->fetch()) {
        $errors[] = 'An account with that email already exists.';
    }
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    redirect(url('register'));
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

$stmt = $db->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
$stmt->execute(['email'=>$email,'password'=> $hashed]);

$_SESSION['user_id'] = $db->lastInsertId();

redirect(url('/'));