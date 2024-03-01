<?php
    session_start();
    session_destroy();
    header("location: ../from-end/login.html");
?>