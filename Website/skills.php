<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.cdnfonts.com/css/bahnschrift" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <title>Robin Ingold - About Me & Skills</title>
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
      <div class="box">
        <h2>skills</h2>
        <div class="two-column">
          <p class="box-text">
            HTML</br>
            JavaScript</br>
            Webflow</br>
            Photoshop</br>
            XD
          </p>
          <p class="box-text">
            CSS</br>
            PHP</br>
            MySQL</br>
            Illustrator</br>
            InDesign
          </p>
        </div>
      </div>
      <div class="box">
      </div>
      <div class="box">
      <h2>languages</h2>
        <p class="box-text">
          german [native]</br>
          english
        </p>
      </div>
    </div>
    <!-- bottom row of boxes -->
    <div class="boxrow">
      <div class="box">
        <h2>about me</h2>
        <div class="two-column">
          <p class="box-text">
            name</br>
            from</br>
            born
          </p>
          <p class="box-text">
            robin kai ingold</br>
            etziken, so</br>
            22 05 97
          </p>
        </div>
      </div>
      <div class="box">
      </div>
      <div class="box">
      </div>
      <div class="box">
        <h2>interests</h2>
        <div class="two-column">
          <p class="box-text">
            football</br>
            music</br>
            design
          </p>
          <p class="box-text">
            formula 1</br>
            trading cards
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