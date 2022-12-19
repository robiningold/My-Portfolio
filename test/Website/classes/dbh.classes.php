<?php

class Dbh {

  protected function connect() {
    try {

      $username = 'admin';
      $password = '';
      $dbh = new PDO('mysql:host=localhost;dbname=myportfolio', $username, $password);
      return $dbh;

    } catch (PDOExpetion $e) {

      print 'Error!: ' . $e->getMessage() . "</br>";
      die();

    }

  }