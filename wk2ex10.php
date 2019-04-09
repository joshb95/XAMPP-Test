<?php
  $mymarks[1] = 55;
  $mymarks[] = 65;
  $mymarks[] = 75;
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>year</th><th>grade</th></tr>
<?php
  for($count = 1;$count < 4;$count++)
  {
    echo "<tr><td>$count</td><td>$mymarks[$count]</td></tr>";
  }
?>
</table>
</body>
</html>
