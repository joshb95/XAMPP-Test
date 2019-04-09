<?php

  $conn = mysqli_connect("localhost", " root ","", "media ");

$sql = "select id from monster;";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row[id]. "'/>";

mysqli_close();
?>
