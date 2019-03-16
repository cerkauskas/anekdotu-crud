<?php

include 'config.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM `anekdotai` WHERE `id` = '". $id ."'");
$anekdotas = mysqli_fetch_assoc($query);

mysqli_close($connection);

?>

<form action="update.php?id=<?php echo $id; ?>" method="post">
  Turinys:<br>
  <textarea name="turinys"><?php echo $anekdotas['turinys']; ?></textarea><br>
  Kategorija:<br>
  <input type="text" name="kategorija" value="<?php echo $anekdotas['kategorija']; ?>"><br>
  Reitingas:<br>
  <input type="range" min="1" max="10" name="reitingas" value="<?php echo $anekdotas['reitingas']; ?>"><br>
  <input type="submit" value="Išsaugoti">
</form>
