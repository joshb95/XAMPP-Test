<?php
  $conn = mysqli_connect("localhost","root","", "db_21717039");
	// Connect to server and select database
	$sql = "SELECT * from test";
    $result = mysqli_query($conn, $sql);
	// Execute sql statement

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";
}
?>
</body>
</html>
