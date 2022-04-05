<?php session_start(); ?>
<?php include_once 'include/header.php'; ?>
    
    <div>
        <h2>SIGNUP</h2>
        <form action="include/signup.php" method="post" enctype="multipart/form-data">
            <input type="text" name="fullname" id="fullname" placeholder="Fullname">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="password" name="password_repeat" id="password" placeholder="Repeat Password">
            <button type="submit" value="Signup" name="submit">Signup</button>
        </form>
        <p>Already Signed up? <a href="login.html.php">Login</a></p>
        <?php 
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo '<p style="text-align: center; margin-top: 10px; color: red; font-weight: 900;">Fill in all fields!</p>';
            }
            
            elseif($_GET["error"] == "usernametaken"){
                echo '<p style="text-align: center; margin-top: 10px; color: red; font-weight: 900;">Username has been taken try to use another!</p>';
            }
        
            elseif($_GET["error"] == "invalidemail"){
                echo '<p style="text-align: center; margin-top: 10px; color: red; font-weight: 900;">Invalid Email!</p>';
            }

            elseif($_GET["error"] == "passwordmismatch"){
                echo '<p style="text-align: center; margin-top: 10px; color: red; font-weight: 900;">Your passwords don\'t match!</p>';
            }
            elseif($_GET["error"] == "none"){
                echo '<p style="text-align: center; margin-top: 10px; color: #0faf7a; font-weight: 900;">You have signed up</p>';
            }
            
        }
        ?>
    </div>
<? include_once 'include/footer.php'; ?>