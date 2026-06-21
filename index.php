<?php
include "db.php";

$result = $conn->query("SELECT * FROM notes ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notes App</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body  class="index-body">
        <div class="index-top-bar">
            <h2>All Notes</h2>
            <a href="add.php" class="add-btn">+</a>
        </div>
        <div class="notes-container">
            <?php while($row = $result ->fetch_assoc()){ ?>

            <a href="view.php?id=<?php echo $row['id'];?>" class="note-card">
                <h3><?php echo $row['title'];?></h3>
                <p><?php echo substr($row['content'], 0,50); ?>...</p>
            </a>
            <?php
            }?>

        </div>
    </body>

</html>