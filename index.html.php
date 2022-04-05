<?php session_start(); ?>
<?php  include_once 'include/main-header.php'; ?>

    <section>
        <?php
        if(isset($_SESSION['usersName'])){
         echo "<p align=center style='color:#0faf7a; font-weight:600;'>Hi ". $_SESSION["usersName"]."</p>";
        }
          ?>
        <h1>WELCOME TO MAILLY</h1>
<?     include_once 'include/footer.php'; ?>