<?php

include 'config.php';

$turinys = addslashes($_POST['turinys']);
$kategorija = addslashes($_POST['kategorija']);
$reitingas = addslashes($_POST['reitingas']);

$query_string = "INSERT INTO `anekdotai` SET `turinys` = '". $turinys ."', ".
                                            "`kategorija` = '". $kategorija ."', ".
                                            "`reitingas` = '". $reitingas ."'";
echo $query_string .'<br>';
mysqli_query($connection, $query_string);

mysqli_close($connection);
?>
Ačiū už naują bajerį!<br>
<a href="index.php">Visi bajeriai</a>
