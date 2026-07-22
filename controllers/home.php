<?php

if (!empty($_SESSION['user_id'])) {
    redirect(url('notes'));
} else {
    redirect(url('login'));
}