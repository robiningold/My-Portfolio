<?php

function emptyInputSignup($username, $pwd, $pwdRepeat) {
  $result;
  if (empty($username) || empty($pwd) || empty($pwdRepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidUid($username) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if ($pwd !== $pwdRepeat) {
    $result= true;
  } else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $username) {
  $sql = "SELECT * FROM users WHERE ID = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare()) {
    header("location: ../login.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result();

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $pwd) {
  $sql = "INSERT INTO users (usersID, usersUsername, usersPassword) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare()) {
    header("location: ../login.php?error=stmtfailed");
    exit();
  }

  $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $usersID, $username, $hashPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../login.php?error=none");
  exit();
}