<?php session_start(); ?>
<?php  include_once 'include/main-header.php'; ?>

    <section>
        <?php
        if(isset($_SESSION['usersName'])){
          $session_user = $_SESSION['usersName'];
          ?>
          <p class="alert">
            <?php echo "Hi $session_user " ?>
          </p>
          <?php
        }
          ?>
        <h1>WELCOME TO MAILLY</h1>
<?     include_once 'include/footer.php'; ?>
