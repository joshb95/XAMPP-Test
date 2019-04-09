<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
	$net = $gross - $gross * 0.22;
	echo $net;
?>
</body>
</html>
