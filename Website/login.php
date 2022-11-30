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
        <form action="includes/login-inc.php" method="post">
          <h3>username</h3>
          <input type="text" name="username" placeholder="username" id="username">
          <h3>password</h3>
          <input type="password" name="pwd" placeholder="password" id="password">
          <button type="submit">login</button>
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