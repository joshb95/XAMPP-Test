<?php
  if ($_POST["txtage"] < 21)
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }
  if ($_POST["radsex"] == "male")
  {
	echo "You are a male <br/>";
  }
  if ($_POST["radsex"] == "female")
  {
  echo "You are a female <br/>";
  if ($_POST["radsex"] == "other")
  {
  echo "You do not identify as male or female <br/>";
  }

?>
