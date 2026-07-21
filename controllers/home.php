<?php

try {
    Database::connect();
    echo "database connected";
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}