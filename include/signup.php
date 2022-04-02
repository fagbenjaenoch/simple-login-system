<?php

$hostname = "localhost";
$fullname = "";
$email = "";
$password = "";

$dbconnect = mysql_connect($hostname,$fullname,$email,$password) || die ("Unable to connect to our servers");
echo "Connected successfully";

/* OR

$dbselect = mysql_select_db('dbname',$dbconnect ) || die("Could not connect to dbname");

* Another way to check if the database has been connected *
if (!dbconnect){
    die("Connection to the server failed: " . mysqli_connect_error())
}
else echo "Connected successfully";
*/

if (isset($_POST['fullname'])){
    echo 'Your nanme is'. $_POST['fullname'];
}