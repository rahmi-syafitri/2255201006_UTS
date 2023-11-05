<?php
//Nested Conditional Statements
//Rahmi Syafitri
namespace Codecademy;
function both($first, $second){
   if ($first){
    if ($second){
      return "both";
    } else {
      return "not both";
    }
  } else {
    return "not both";
  }
}
//NIM : 2255201006
//kelas A
echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);
?>