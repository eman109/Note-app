<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = trim($_POST["title"]);
    $content = trim($_POST["content"]);
    if(empty($title)){
        header("Location: add.php");
        exit();
    }
    $stmt = $conn->prepare("INSERT INTO notes (title,content) VALUES (?,?)");
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Note</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body class="add-body">
        <div class="add-top-bar">
            <a href="index.php" class="back-btn">Back</a>
            <button class="save-btn" form="noteForm">Save</button>
        </div>
        <form id="noteForm" method="post" class="editor">
            <input type="text" name="title" placeholder="Title" class="title">
            <textarea name="content" placeholder="..." class="body"></textarea>
        </form>
        <script src="editor.js"></script>
    </body>
</html>