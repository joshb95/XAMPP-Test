<?php
  $conn = mysqli_connect("localhost","root","", "db_21717039");
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]’)";

  $result = mysqli_query($conn, $sql);
	// Connect to server and select database

	// Execute sql statement
mysqli_free_result($result);

	$sql = "SELECT * from test";

    $result = mysqli_query($conn, $sql);

	// Execute sql statement

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>
