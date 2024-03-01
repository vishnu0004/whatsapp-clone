<?php
include('../database/connection.php');


    // Function to check if the username already exists
    function isUsernameExists($connect, $username, ) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
    
        $result = $connect->query($sql);
    
        return $result->num_rows > 0;
    }

?>
