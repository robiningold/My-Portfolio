<?php

function check_login($con) {
  
  //check if the session value exists
  if(isset($_SESSION['id'])) {

    $id = $_SESSION['id'];
    $query = "select * from the users where id = '$id' limit 1";

    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0) {

      $user_data = mysqli_fetch_assoc($result);
      return $user_data;

    }

  }

  //redirect to login
  header("Location: login.php");
  die;

}