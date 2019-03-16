<?php

include 'config.php';
$query = mysqli_query($connection, "SELECT * FROM `anekdotai`");
$total = mysqli_num_rows($query);

// $i = 0;
// while ($i < $total) {
for ($i = 0; $i < $total; $i ++) {
  $anekdotas = mysqli_fetch_assoc($query);
  echo "ID: ". $anekdotas['id'] .'<br>';
  echo "Turinys: ". htmlspecialchars($anekdotas['turinys']) .'<br>';
  echo "Kategorija: ".  htmlspecialchars($anekdotas['kategorija']) .'<br>';
  echo "Reitingas: ". $anekdotas['reitingas'] .'<br>';
  echo '<a href="delete.php?id='. $anekdotas['id'] .'">Delete</a> ';
  echo '<a href="edit.php?id='. $anekdotas['id'] .'">Edit</a>';
  echo '<hr>';
  // $i ++;
}

mysqli_close($connection);

?>

<a href="create.php">Naujas bajeris</a>
