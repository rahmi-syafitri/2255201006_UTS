<?php
//Truthy and Falsy
//Rahmi Syafitri
namespace Codecademy;
function truthyOrFalsy($trueorfalse){
  if ($trueorfalse){
    return "True";
  } else {
    return "False";
  }
}
//NIM : 2255201006
//kelas A
echo truthyOrFalsy(TRUE);
echo "\n\n";
echo truthyOrFalsy(FALSE);
echo "\n\n";
echo truthyOrFalsy("pbo");
echo "\n\n";
echo truthyOrFalsy("");
echo "\n\n";
echo truthyOrFalsy("-193839.09");
echo "\n\n";
echo truthyOrFalsy("0");
echo "\n\n";
?>