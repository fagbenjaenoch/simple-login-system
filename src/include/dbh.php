<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mailly";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
if(!$conn){
    die("Conneection failed: ". mysqli_connect_error());
}