<?php

$hostname = "localhost";
$fullname = "fullname";
$email    = "email";
$password = "password";

// $dbconnect = mysql_connect($hostname,$fullname,$email,$password) || die ("Unable to connect to our servers");
// echo "Connected successfully";

/* OR

$dbselect = mysql_select_db('dbname',$dbconnect ) || die("Could not connect to dbname");

* Another way to check if the database has been connected *
if (!dbconnect){
    die("Connection to the server failed: " . mysqli_connect_error())
}
else echo "Connected successfully";
*/

if (isset($_POST['fullname'])){
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)){
        echo "Only Letters and whitespace are allowed!";
    }
    echo 'Your name is '. $_POST['fullname'];
}
if (isset($_POST['email'])){
    echo 'Your email is '. $_POST['email'];
}


