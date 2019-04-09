<?php
function html_header($pageTitle)
{
	echo "<html><title> $pageTitle </title></head>";
	echo "<body>";
}

function html_h1($text)
{
	echo "<h1> $text </h1>";
}

function html_footer()
{
	echo "</body>";
	echo "</html>";
}

function calculatetax($salary, $allowance=12500, $rate=40)
{
	$tax = (($salary - $allowance) * ($rate/100));
	return $tax;
}

?>
