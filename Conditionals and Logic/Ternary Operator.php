<?php
//Ternary Operator
//Rahmi Syafitri
namespace Codecademy;

function ternaryCheckout($items){
 return $items <= 12 ? "express lane" : "regular lane";
}
//Nim : 2255201006
//kelas A
function ternaryVote($age){
  return $age >= 18 ? "yes" : "no";
}
echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);  
?>