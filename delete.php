<?php

include 'config.php';
mysqli_query($connection, "DELETE FROM `anekdotai` WHERE `id` = '". $_GET['id'] ."'");

mysqli_close($connection);
?> ištrynėm, ačiū, <a href="index.php">eik atgal</a>
