<?php

$serverName = "localhost";
$dbUserName = "admin";
$dbPssword = "";
$dbName = "myPortfolio";

$conn = myslqi_connect($serverName, $dbUserName, $dbPssword, $dbName);

if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}