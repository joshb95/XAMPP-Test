<?php
  $conn = mysqli_connect("localhost","root","", "db_21717039");
	// Connect to server and select database

	$sql = "SELECT * from test where name = '$_GET[id]' ";
      $result = mysqli_query($conn, $sql);
	// Execute query
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action=" " method="post">

	Name :
	<input type=text name=txtname value= <?php echo $row[name] ?>
	</br>
	Phone number :
	<input type=text name=txttelno value= <?php echo $row[phone_number] ?>
	</br>
	Email :
	<input type=text name=txtemail value= <?php echo $row[email] ?>
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
