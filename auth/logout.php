<?php
    session_start();
    session_destroy();
    header("location: ../front-end/login.php");
?>