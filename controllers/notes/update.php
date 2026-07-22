<?php

require_login();

$id      = $params[0];
$title   = trim($_POST['title'] ?? '');
$content = trim($_POST['content'] ?? '');

if (empty($title)) {
    redirect(url("notes/{$id}/edit"));
}

$db   = Database::connect();
$stmt = $db->prepare('UPDATE notes SET title = :title, content = :content WHERE id = :id AND user_id = :user_id');
$stmt->execute([
    'title'   => $title,
    'content' => $content,
    'id'      => $id,
    'user_id' => $_SESSION['user_id'],
]);

redirect(url("notes/{$id}"));