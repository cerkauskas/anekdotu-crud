<?php

include 'config.php';

$id = addslashes($_GET['id']);
$turinys = addslashes($_POST['turinys']);
$kategorija = addslashes($_POST['kategorija']);
$reitingas = addslashes($_POST['reitingas']);

$query_string = "UPDATE `anekdotai` SET `turinys` = '". $turinys ."', ".
                                      "`kategorija` = '". $kategorija ."', ".
                                      "`reitingas` = '". $reitingas ."' ".
                                   "WHERE `id` = '". $id ."'";
echo $query_string .'<br>';
mysqli_query($connection, $query_string);

mysqli_close($connection);
?>
Ačiū už atnaujintą bajerį!<br>
<a href="index.php">Visi bajeriai</a>
