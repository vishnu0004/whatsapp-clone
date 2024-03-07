<?php
include './lib/utility.php';


$uri = $_SERVER["REQUEST_URI"];
// dd($uri);

$routs = [
    '/' => 'front-end/login.php',
    '/register' => 'front-end/register.php',
    '/home' => 'page/chat.php',
];


if(array_key_exists($uri, $routs)){
    require $routs[$uri];
}else{
    echo "no such rout";
    die();
}

?>