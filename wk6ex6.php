<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(21000,20) . " tax";
	html_footer();
?>
