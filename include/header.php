<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">Mailly</div>
        <nav>
            <ul>
                <li><a href="index.html.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact us</a></li>
                <?php
                if(isset($_SESSION['usersId'])){
                    echo '<li><a href="profilepage.html.php">Profile page</a></li>
                    <li><a href="include/logout.php" class="active">Log out</a></li>';
                }
                else{
                    echo '<li><a href="login.html.php">Login</a></li>
                    <li><a href="signup.html.php" class="active">Signup</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    <!-- <div class="form-container"> -->