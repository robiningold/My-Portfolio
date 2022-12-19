<?php
  session_start();
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
      if(isset($_SESSION["userid"])){
        ?>
          <h1>robin ingold</h1>
          <p>Hello, <?php echo $_SESSION['username']; ?></p>
          <a href="logout.php">Logout</a>
          <h1>web design & development</h1>
      <?php
      } else {
      ?>
        <h1>robin ingold</h1>
        <h1>web design & development</h1>
      <?php
        }
      ?>
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
          <input type="text" name="uid" placeholder="username">
          <h3>password</h3>
          <input type="password" name="pwd" placeholder="password">
          <button type="submit" name="submit">login</button></br>
          <!-- <a href="signup.php">sign up</a> -->
        </form>
      </div>
      <div class="box signup-box">
        <h2>signup</h2>
        <form method="post">
          <h3>username</h3>
          <input type="text" name="uid" placeholder="username">
          <h3>email</h3>
          <input type="email" name="email" placeholder="email">
          <h3>password</h3>
          <input type="password" name="pwd" placeholder="password">
          <h3>confirm password</h3>
          <input type="password" name="pwdRepeat" placeholder="confirm password">
          <button type="submit" name="submit">sign up</button></br>
          <!-- <a href="login.php">login</a> -->
        </form>
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