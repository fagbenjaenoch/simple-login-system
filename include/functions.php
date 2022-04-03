<?php

function emptyInputSignup( $fullname,$email,$password,$password_repeat){
    $result;
    if (empty($fullname) || empty($email) || empty($password) || empty($password_repeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function passwordMatch($password,$password_repeat){
    $result;
    if ($password_repeat != $password_repeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function nameExists($conn, $fullname, $email){
    $sql = "SELECT * FROM users WHERE fullname = ? OR usersEMail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.html?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $fullname, $email)
}