<?php
include "db.php";

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM notes WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$note = $result->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $stmt = $conn->prepare("UPDATE notes SET title=?, content=? WHERE id=?");
    $stmt->bind_param("ssi", $title, $content, $id);
    $stmt->execute();

    header("Location: view.php?id=$id");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="add-body">

<div class="add-top-bar">
    <a href="view.php?id=<?php echo $note['id']; ?>" class="back-btn">Back</a>
    <button type="submit" class="update-btn" form="noteForm">Update</button>
</div>

<form method="post" class="editor" id="noteForm">

    <input type="hidden" name="id" value="<?php echo $note['id']; ?>">

    <input type="text"
           name="title"
           value="<?php echo $note['title']; ?>"
           class="title">

    <textarea name="content"
              class="body"><?php echo $note['content']; ?></textarea>


</form>

</body>
</html>