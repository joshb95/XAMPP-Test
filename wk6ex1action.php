<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]’)";

  $link = mysqli_connect("localhost","login","pwd", "my_database");
  $result = mysqli_query($link,$sql);
	// Connect to server and select database

	// Execute sql statement

	$sql = "SELECT * from test";

  mysqli_free_result($result);
mysqli_close($link);

	// Execute sql statement

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>
