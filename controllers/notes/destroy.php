<?php

require_login();

$id = $params[0];

$db   = Database::connect();
$stmt = $db->prepare('DELETE FROM notes WHERE id = :id AND user_id = :user_id');
$stmt->execute(['id' => $id, 'user_id' => $_SESSION['user_id']]);

redirect(url('notes'));