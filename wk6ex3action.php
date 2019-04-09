<?php
$conn = mysqli_connect("localhost","root","", "db_21717039");
$sql = “UPDATE test SET name = 'txtName'
SET email = 'txtEmail';
SET phone_number = 'txtPhoneNumber';
$result = mysqli_query($conn,$sql);
 ?>
