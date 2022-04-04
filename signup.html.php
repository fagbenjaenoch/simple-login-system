<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Test | Signup</title>
</head>
<body>
    <header>
        <div class="logo">Mailly</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html" class="active">Signup</a></li>
            </ul>
        </nav>
        </header>
    <div class="form-container">
        <h2>SIGNUP</h2>
        <form action="include/signup.php" method="post" enctype="multipart/form-data">
            <input type="text" name="fullname" id="fullname" placeholder="Fullname">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="password" name="password_repeat" id="password" placeholder="Repeat Password">
            <button type="submit" value="Signup" name="submit">Signup</button>
        </form>
        <p>Already Signed up? <a href="login.html">Login</a></p>
    </div>
</body>
</html>