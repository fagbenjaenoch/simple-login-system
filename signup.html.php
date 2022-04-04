<?php
    include_once 'include/header.php';
?>
    <div class="form-container">
        <h2>SIGNUP</h2>
        <form action="include/signup.php" method="post" enctype="multipart/form-data">
            <input type="text" name="fullname" id="fullname" placeholder="Fullname">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="password" name="password_repeat" id="password" placeholder="Repeat Password">
            <button type="submit" value="Signup" name="submit">Signup</button>
        </form>
        <p>Already Signed up? <a href="login.html.php">Login</a></p>
    </div>
<? include_once 'include/footer.php'; ?>