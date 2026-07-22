<?php

require_login();

$id = $params[0];

$db   = Database::connect();
$stmt = $db->prepare('SELECT * FROM notes WHERE id = :id AND user_id = :user_id');
$stmt->execute(['id' => $id, 'user_id' => $_SESSION['user_id']]);
$note = $stmt->fetch();

if (!$note) {
    http_response_code(404);
    view('404.view.php');
    exit();
}

view('notes/show.view.php', ['note' => $note]);