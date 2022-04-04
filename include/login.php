<?php

if (isset($_POST['submit'])){
    
    $username = $_POST["fullname"];
    $password = $_POST["password"];

    require_once 'dbh.php';
    require_once 'functions.php';

    if(emptyInputLogin( $username, $password)){
        header("location: ../signup.html?error=emptyinput");
        exit();
    }

    loginuser($conn, $username, $password);
}
else{
    header("location: ../login.html");
    exit();
}
