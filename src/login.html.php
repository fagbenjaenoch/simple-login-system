<?php session_start(); ?>
<?php include_once 'include/header.php' ?>
    
    

<!-- <section class="form-container"> -->
    <div >
        <h2>LOGIN</h2>
        <?php 
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                ?>
                <p class="alert err-message">
                  <?php echo "Fill in all fields!" ?>
                </p>
                <?php
            }
            
            elseif($_GET["error"] == "wronglogin"){
                ?>
                <p class="alert err-message">
                  <?php echo "Username or Password is incorrect!" ?>
                </p>
                <?php
            }
        }
        ?>
        <form action="include/login.php" method="post" enctype="multipart/form-data">
            <input type="text" name="fullname" id="fullname" placeholder="Fullname or Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" value="Sigin"  name="submit">Login</button>
        </form>
        <p>Not Signed up? <a href="signup.html.php">Signup</a></p>
    </div>
    <!-- </section> -->
    <?php  include_once 'include/footer.php'; ?>