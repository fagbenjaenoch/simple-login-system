<?php session_start(); ?>
<?php include_once 'include/header.php'; ?>
    
    <div>
        <h2>SIGNUP</h2>
        <?php 
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                ?>
                <p class="alert err-message">
                  <?php echo "Fill in all fields!" ?>
                </p>
                <?php
            }
            
            elseif($_GET["error"] == "usernametaken"){
                ?>
                <p class="alert err-message">
                  <?php echo "Username has been taken try to use another!" ?>
                </p>
                <?php
            }
        
            elseif($_GET["error"] == "invalidemail"){
                 ?>
                <p class="alert err-message">
                  <?php echo "Invalid Email!" ?>
                </p>
                <?php
            }

            elseif($_GET["error"] == "passwordmismatch"){
                 ?>
                <p class="alert err-message">
                  <?php echo "Your passwords dont match!" ?>
                </p>
                <?php
            }
            elseif($_GET["error"] == "none"){
                 ?>
                <p class="alert success">
                  <?php echo "You have signed up" ?>
                </p>
                <?php
            }
            
        }
        ?>
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