<?php
// Default Parameters
// Write your code below:
// Rahmi Syafitri
// Nim : 2255201006
// kelas A

function calculateTip($total, $tip = 20)
{
  return $total * (1 + $tip/100);
}

echo calculateTip(100, 25);
echo "\n";
echo calculateTip(100); 
echo "\n";
echo calculateTip(65, 15); 
?>