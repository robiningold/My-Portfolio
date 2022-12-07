<?php

  session_start();

  include("connection.php");
  include("functions.php");

  //check if the user clicked on the post button
  if($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    /* $password_repeat = $_POST['passsword-repeat']; */

    //check if the inputs aren't empty
    if(!empty($username) && !empty($password)) {

      //read from database
      $query = "select * from users where username = '$username' limit 1";

      $result = mysqli_query($con, $query);

      if ($result) {
        
        if($result && mysqli_num_rows($result) > 0) {

          $user_data = mysqli_fetch_assoc($result);
          if($user_data['password'] === $password) {

            header("Location: login.php");
            die;

          }
  
        }

      }

      echo "Please enter the correct username and/or password!";

    } else {

      echo "Please enter some valid information!";

    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.cdnfonts.com/css/bahnschrift" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <title>Robin Ingold - Webdesign & Development</title>
</head>
<body>
  <!-- header -->
  <header>
    <?php
      include 'header.php';
    ?>
  </header>
  <main>
    <!-- top row of boxes -->
    <div class="boxrow">
      <div class="box">
        <h2><a href="index.php">&#9664; back home</a></h2>
      </div>
      <div class="box login-box">
        <h2>login</h2>
        <form method="post">
          <h3>username</h3>
          <input type="text" name="username" placeholder="username" id="username">
          <h3>password</h3>
          <input type="password" name="password" placeholder="password" id="password">
          <button type="submit">login</button></br>
          <a href="signup.php">sign up</a>
        </form>
      </div>
      <div class="box">
      </div>
      <div class="box">
        
      </div>
    </div>
    <!-- bottom row of boxes -->
    <div class="boxrow">
      <div class="box">
        
      </div>
      <div class="box">
        
      </div>
      <div class="box">
        
      </div>
      <div class="box">
      
      </div>
    </div>
  </main>
  <!-- footer -->
  <footer>
    <?php
      include 'footer.php';
    ?>
  </footer>
</body>
</html>