<div class="boxrow">
  <div class="box">
    <h2><a href="/">&#9664; back home</a></h2>
  </div>
  <div class="box">
    <?php if (isset($_SESSION['username'])): ?>
      <a href="#" onclick="showForm()"><p>[create new project]</p></a>
      <div id="create-project" class="hidden">
        <h3>project name</h3>
        <input type="text" name="projectname" placeholder="project name" id="projectname">
        <h3>description</h3>
        <input type="text" name="description" placeholder="description" id="description">
        <h3>link</h3>
        <input type="text" name="link" placeholder="link" id="link"><br /><br />
        <a href="/api/newproject.php" onclick="newProject()">create</a>
      </div>
    <?php else: ?>
    <?php endif ?>
  </div>
  <div class="box">
    <h2>project name</h2>
    <p>[description]</p>
    <a href="https://www.google.com" class="bottom-text">
      <p>[view this project]</p>
    </a>
  </div>
  <div class="box">
    <h2>project name</h2>
    <p>[description]</p>
    <a href="https://www.google.com" class="bottom-text">
      <p>[view this project]</p>
    </a>
  </div>
</div>
<!-- bottom row of boxes -->
<div class="boxrow">
  <div class="box">

  </div>
  <div class="box">
    <h2>project name</h2>
    <p>[description]</p>
    <a href="https://www.google.com" class="bottom-text">
      <p>[view this project]</p>
    </a>
  </div>
  <div class="box">

  </div>
  <div class="box">

  </div>
</div>