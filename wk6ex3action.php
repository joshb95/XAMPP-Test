<?php
$conn = mysqli_connect("localhost","root","", "db_21717039");
$sql = "UPDATE test SET name = 'txtname'
SET email = 'txtemail';
SET phone_number = 'txttelno'";
$result = mysqli_query($conn,$sql);
 ?>
