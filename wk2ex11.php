<?php
  $mymarks["C0450"] = 84;
  $mymarks["C0451"] = 62;
  $mymarks["C0452"] = 79;
  $mymarks["C0453"] = 74;
  $mymarks["C0454"] = 67;
  $mymarks["C0455"] = 61;

  while(list($index,$value) = each($mymarks))
  {
    echo "for $index my grade was $value <br/>";
  }
  $total = 0;
  $total = $total + $mymarks[$index];
  $average = $total /  6;
  echo "My average grade was $average";

?>
