<?php

if (isset($_POST["submit"])) {
  
  //variables
  $username = $_POST["name"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwd-repeat"];

  require_once 'db-inc.php';
  require_once 'functions-inc.php';

  //check required inputs
  if (emptyInputSignup($username, $pwd, $pwdRepeat) !== false) {
    header("location: ../login.php?error=emptyinput");
    exit();
  }

  if (invalidUid($username) !== false) {
    header("location: ../login.php?error=invaliduid");
    exit();
  }

  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../login.php?error=passwordsdontmatch");
    exit();
  }

  if (uidExists($conn, $username) !== false) {
    header("location: ../login.php?error=usernametaken");
    exit();
  }

  createUser($conn, $username, $pwd);

} else {
  header("location: ../login.php");
  exit();
}