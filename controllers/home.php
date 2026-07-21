<?php

if (!empty($_SESSION['user_id'])) {
    echo "Logged in as user ID: " . $_SESSION['user_id'];
    echo '<form method="post" action="' . url('logout') . '"><button type="submit">Logout</button></form>';
} else {
    echo '<a href="' . url('login') . '">Login</a> or <a href="' . url('register') . '">Register</a>';
}