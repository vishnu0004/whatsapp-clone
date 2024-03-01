<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "whatsapp";

$connect = mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    //    echo "Connection ok" ;
}
else{
    echo "connection faild !" ;
}
?>
