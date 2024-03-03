<?php
require './database/connection.php';
session_start();

if (!isset($_SESSION['use_id'])) {
    header("location: ./front-end/login.php");
    return;
}

header("location: ./pages/chat.php");

?>