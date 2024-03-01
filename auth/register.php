<?php

error_reporting(0);

include('../database/connection.php');
require_once('../database/queries.php');

// Assuming you have a form submission
if ($_POST['register']){
    $username = $_POST["uname"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["cpassword"];
}

 // Check if passwords match
 if ($password === $confirmPassword) {

    // Check if the username already exists
    if (isUsernameExists($connect, $username, $insert)) {
        echo "Username already exists. Please choose a different username.";
    } else {

        $insert = mysqli_query($connect, "INSERT INTO users (username, password_hash) VALUES ('$username', '$password')");

        if($insert){
            echo "Data has been successfully inserted into the database.";
        }
        else{
            echo "Error inserting data into the database: " . mysqli_error($connect);
            
        }

        // Your code to insert the data into the database goes here
        // For example:
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // $sql = "INSERT INTO your_table_name (username, password) VALUES ('$username', '$hashedPassword')";
        // $conn->query($sql);
    }
} else {
    echo "Password and confirmation password do not match.";
}
    
?>




