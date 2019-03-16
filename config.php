<?php

function connect() {
  $host = "localhost";
  $user = "root";
  $pass = "root";
  $db = "prikolistas";
  $conn = mysqli_connect($host, $user, $pass, $db);
  mysqli_set_charset($conn, "utf8");

  return $conn;
}

$connection = connect();
