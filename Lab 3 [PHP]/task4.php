<?php
   
   $num1 = 10;
   $num2 = 9;
   $num3 = 14;
   $large;
   
   if ($num1 > $num2 and $num1 > $num3)
   {
	   $large = $num1;
   }
   else if ($num2 > $num3 and $num2 > $num1)
   {
	   $large = $num2;
   }
   else
	   $large = $num3;
   
   echo "Large number is : ". $large. "<br>";
 