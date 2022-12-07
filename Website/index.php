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
  </header>
  <main>
    <!-- top row of boxes -->
    <div class="boxrow">
      <div class="box">
        <h2>about me</h2>
        <p class="box-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere tenetur voluptate recusandae nam dignissimos amet? Mollitia itaque velit consequatur perspiciatis nisi eos impedit ipsa, ullam iusto, animi officia doloremque minima.
        Cum omnis iure, perspiciatis qui unde nobis necessitatibus corrupti temporibus earum, tempora incidunt explicabo ad deleniti. Maxime amet id nostrum, nihil ducimus facilis illo, laudantium, fugiat officiis placeat autem expedita.</p>
      </div>
      <div class="box" id="image-box">
        
      </div>
      <div class="box">
        
      </div>
      <div class="box">
        <a href="skills.php">
          <h2>about me & skills</h2>
        </a>
        <a href="skills.php" class="bottom-text">
          <p>[learn more about me and my skills]</p>
        </a>
      </div>
    </div>
    <!-- bottom row of boxes -->
    <div class="boxrow">
      <div class="box">
        <a href="work.php">
          <h2>my work</h2>
        </a>
        <a href="work.php" class="bottom-text">
          <p>[view all the projects i made so far]</p>
        </a>
      </div>
      <div class="box">
        
      </div>
      <div class="box">
        <a href="experience.php">
          <h2>experience & education</h2>
        </a>
        <a href="experience.php" class="bottom-text">
          <p>[all the places i worked and learned new things]</p>
        </a>
      </div>
      <div class="box">
        <h2>contact</h2>
          <div class="contact-info">
            <p>sumpfstrasse 21</br>
            4554 etziken</br></br></br>
            <a href="mailto: info@robin-ingold.ch">info@robin-ingold.ch</a></br>
            +41 79 852 17 20
            </p>
          </div>
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