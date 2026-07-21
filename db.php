<?php
// $conn = new mysqli("localhost", "root", "", "notes_db"); ->added it in config

if($conn->connect_error){
    die("oconnection failed: " . $conn->connect_error);
}
?>