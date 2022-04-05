<?php session_start(); ?>
<?php include_once 'include/header.php' ?>
    
    

<!-- <section class="form-container"> -->
    <div >
        <h2>LOGIN</h2>
        <form action="include/login.php" method="post" enctype="multipart/form-data">
            <input type="text" name="fullname" id="fullname" placeholder="Fullname or Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" value="Sigin"  name="submit">Login</button>
        </form>
        <p>Not Signed up? <a href="signup.html.php">Signup</a></p>
        <?php 
        switch(isset($_GET["error"])){
            case("emptyinput"):
                echo "<p>Fill in all fields!</p>";
                break;
            
            case("usernametaken"):
                echo "<p>Fill in all fields!</p>";
                break; 
        }
        ?>
    </div>
    <!-- </section> -->
    <?php  include_once 'include/footer.php'; ?>
