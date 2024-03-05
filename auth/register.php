<?php
error_reporting(0);

include('../database/connection.php');
require_once('../database/queries.php');

session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["cpassword"];

    // Check if passwords match
    if ($password === $confirmPassword) {
        // Check if the username already exists
        if (isUsernameExists($connect, $username)) {
            $_SESSION['register-error'] = "Username already exists. Please choose a different username.";
        } else {
            $insert = mysqli_query($connect, "INSERT INTO users (username, password_hash) VALUES ('$username', '$password')");

            if ($insert) {
                $_SESSION['register-error'] = '';
                header("Location: ../pages/chat.php");
                exit();
            } else {
                $_SESSION['register-error'] = "Error inserting data into the database: " . mysqli_error($connect);
            }
        }
    } else {
        $_SESSION['register-error'] = "Password and confirmation password do not match.";
    }

    // Redirect back to the registration page
    header("Location: ../front-end/register.php");
    exit();
?>
