<?php

class SignupContr extends Signup {

  private $uid;
  private $email;
  private $pwd;
  private $pwdRepeat;

  public function __construct($uid, $email, $pwd, $pwdRepeat) {

    $this->uid = $uid;
    $this->email = $email;
    $this->pwd = $pwd;
    $this->pwdRepeat = $pwdRepeat;

  }

  public function signupUser() {

    if($this->emptyInput() == false) {
      //empty input
      
      header("Location: ../index.php?error=emptyinput");
      exit();
    }

    if($this->invalidEmail() == false) {
      //empty email
      header("Location: ../index.php?error=username");
      exit();
    }

    if($this->emptyInput() == false) {
      //empty input
      header("Location: ../index.php?error=email");
      exit();
    }

    if($this->pwdMatch() == false) {
      //empty passwords dont match
      header("Location: ../index.php?error=passwordmatch");
      exit();
    }

    if($this->uidTakenCheck() == false) {
      //empty username or email taken
      header("Location: ../index.php?error=useroremailtaken");
      exit();
    }

    $this->setUser($this->uid, $this->email, $this->pwd);

  }

  private function emptyInput() {

    $result;
    if(empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;

  }

  private function invalidUid() {

    $result;
    if(!preg_match('/^[a-zA-Z0-9]*$/', $this->uid)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;

  }

  private function invalidEmail () {

    $result;
    if (!filter_var($this-email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;

  }

  private function pwdMatch () {

    $result;
    if ($this->pwd !== $this->pwdRepeat) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }


  private function uidTakenCheck () {

    $result;
    if (!$this->checkUser($this->uid, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

}