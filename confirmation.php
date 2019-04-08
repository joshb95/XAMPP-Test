<?php
   echo "<h2> Your order qty is $_POST[selqty] </h2></br>";
   $price = 10;
   $total = $_POST["selqty"];
   $total =$total * $price;
   echo "Your total is £$total";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>"
?>
