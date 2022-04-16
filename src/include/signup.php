<?php

if (isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputSignup( $fullname,$email,$password,$password_repeat) !== false){
        header("location: ../signup.html.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup.html.php?error=invalidemail");
        exit();
    }
    if (passwordMatch($password,$password_repeat) !== false){
        header("location: ../signup.html.php?error=passwordmismatch");
        exit();
    }
    if (nameExists($conn,$fullname, $email) !== false){
        header("location: ../signup.html.php?error=usernametaken");
        exit();
    }
    createUser($conn, $fullname, $email, $password);
    header("location: ../login.html.php");
    
}
else{
    header("location: ../signup.html.php");
    exit();
}

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




