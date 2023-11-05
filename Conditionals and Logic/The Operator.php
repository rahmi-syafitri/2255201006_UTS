<?php
// The || Operator
// Rahmi Syafitri
namespace Codecademy;
function willWeEat($meal, $hungry){
  if ($hungry || ($meal === "dessert")){
    return "Yum. Thanks!";
  }
  else{
      return "No thanks. We're not hungry.";
    }
}

// NIM : 2255201006
//kelas A
echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);
?>