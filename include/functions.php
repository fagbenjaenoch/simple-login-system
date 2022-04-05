<?php

require_once 'dbh.php';

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
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.html.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $fullname, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function createUser($conn, $fullname, $email, $password){
    $sql = "INSERT INTO users (usersName, usersEmail, usersPassword) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.html.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.html.php?error=none");
}
function emptyInputLogin( $username, $password){
    $result;
    if (empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginuser($conn, $username, $password){
    $userExists = nameExists($conn, $username, $username);
    if($userExists === false){
        header("location: ../signup.html.php?error=wronglogin");
        exit();
    }

    $passwordHashed = $userExists["usersPassword"];
    $checkpassword = password_verify($password, $passwordHashed);

    if($checkpassword === false){
        header("location: ../login.html.php?error=wronglogin");
        exit();
    }
    elseif($checkpassword === true){
        session_start();
        $_SESSION["usersId"] = $userExists["usersId"];
        $_SESSION["userName"] = $userExists["userName"];
        header("location: ../index.html.php");
        exit();
    }
}



