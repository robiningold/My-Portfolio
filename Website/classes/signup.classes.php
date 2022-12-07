<?php

class Signup extends Dbh {

  protected function setuser ($uid, $email, $pwd) {

    $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_email, users_pwd) VALUES (?, ?, ?);');

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    if (!$stmt->execute(array($uid, $email, $hashedPwd))) {
      $stmt = null;
      header('location: ../index.php?error=stmtfailed');
      exit();
    }

    $stmt = null;
  }

  protected function checkUser ($uid, $email) {

    $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

    if (!$stmt->execute(array($uid, $email))) {
      $stmt = null;
      header('location: ../index.php?error=stmtfailed');
      exit();
    }

    $resultCheck;
    if($stmt->rowCount() > 0) {
      $resultCheck = false;
    } else {
      $resultCheck = true;
    }
    return $resultCheck
  }
  
}