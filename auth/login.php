<?php
session_start();

include('../database/connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$check = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password_hash = '$password'");

if (mysqli_num_rows($check) > 0) {

    $userdata = mysqli_fetch_array($check);

    $_SESSION['userdata'] = $userdata;

    $_SESSION['login-error'] = '';
    header("Location: ../pages/chat.php");
} else {
    $_SESSION['login-error'] = "User not found!";
    header("Location: ../front-end/login.php");
}
