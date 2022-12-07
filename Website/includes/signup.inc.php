<?php

if(isset($_POST['submit'])) {

  //getting data
  $uid = $_POST['uid']
  $email = $_POST['email']
  $pwd = $_POST['pwd']
  $pwdRepeat = $_POST['pwdRepeat']

  // instantiate signupcontr class
  include '../classes/dbh.classes.php';
  include '../classes/signup.classes.php';
  include '../classes/signup-contr.classes.php';
  $signup = new SignupContr($uid, $email, $pwd, $pwdRepeat);

  // running error handlers and user signup
  $signup->signupUser();

  // going back to front page
  header("Location: ../index.php?error=none");


}