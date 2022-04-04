<?php
    session_start();
    include_once 'include/header.php';
    include_once 'include/footer.php';
?>

    <div class="form-container">
        <h2>LOGIN</h2>
        <form action="include/login.php" method="post" enctype="multipart/form-data">
            <input type="text" name="fullname" id="fullname" placeholder="Fullname or Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" value="Sigin"  name="submit">Login</button>
        </form>
        <p>Not Signed up? <a href="signup.html.php">Signup</a></p>
    </div>
