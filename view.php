<?php
include "db.php";

if (!isset($_GET['id'])) {
    die("No note selected");
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM notes WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Note not found");
}

$note = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $note['title']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="view-body">

    <div class="view-top-bar">
        <a href="index.php" class="back-btn">Back</a>
        <a href="edit.php?id=<?php echo $note['id']; ?>" class="edit-btn">
            Edit
        </a>
    </div>

<div class="note-view">
    <h1><?php echo $note['title']; ?></h1>
    <p><?php echo nl2br($note['content']); ?></p>
    <a href="delete.php?id=<?php echo $note['id']; ?>"
   class="delete-btn"
   onclick="return confirm('Delete this note?')">Delete</a>
</div>

</body>
</html>