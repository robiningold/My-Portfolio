<?php

if(isset($_POST['submit'])) {

  //getting data
  $uid = $_POST['uid']
  $pwd = $_POST['pwd']

  // instantiate Logincontr class
  include '../classes/dbh.classes.php';
  include '../classes/login.classes.php';
  include '../classes/login-contr.classes.php';
  $login = new LoginContr($uid, $email, $pwd, $pwdRepeat);

  // running error handlers and user login
  $login->loginUser();

  // going back to front page
  header("Location: ../index.php?error=none");


}