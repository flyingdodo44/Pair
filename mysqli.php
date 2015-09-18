<?php
$mysqli = mysqli_connect("localhost:3307", "root", "usbw", "pair");  
if (!$mysqli) {
    echo "Failed to connect to MySQL: ("  . mysqli_connect_error() . ") " . mysqli_connect_error();
    die();
}
echo 'het is gelukt';
// echo $mysqli->host_info . "\n";