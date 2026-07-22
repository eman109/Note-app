<?php

require_login();

$title   = trim($_POST['title'] ?? '');
$content = trim($_POST['content'] ?? '');

if (empty($title)) {
    $_SESSION['errors'] = ['Title is required.'];
    redirect(url('notes/create'));
}

$db   = Database::connect();
$stmt = $db->prepare('INSERT INTO notes (user_id, title, content) VALUES (:user_id, :title, :content)');
$stmt->execute([
    'user_id' => $_SESSION['user_id'],
    'title'   => $title,
    'content' => $content,
]);

redirect(url('notes'));