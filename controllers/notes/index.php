<?php

require_login();

$db   = Database::connect();
$stmt = $db->prepare('SELECT * FROM notes WHERE user_id = :user_id ORDER BY id DESC');
$stmt->execute(['user_id' => $_SESSION['user_id']]);
$notes = $stmt->fetchAll();

view('notes/index.view.php', ['notes' => $notes]);