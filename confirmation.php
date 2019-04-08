<?php
   echo "<h2> Your order qty is $_POST[selqty] </h2></br>";
   $total =$_POST["selqty"];
   $total = $total * 10
   echo "Your total is £$total";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>"
?>
