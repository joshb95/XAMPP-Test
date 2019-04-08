<?php
   echo "<h2> Your order qty is $_POST[selqty] </h2></br>";
   echo "You have chosen $_POST[selsize] widgets";
   $total =$_POST[selqty] * 10;
   echo "Your total is £$total";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>"
?>
