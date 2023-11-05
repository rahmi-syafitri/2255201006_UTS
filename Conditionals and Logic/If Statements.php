<?php
namespace Codecademy;

//If Statements
//Rahmi Syafitri
//2255201006
//kelas A

function markAnswer($is_correct)
{
   if ($is_correct) {
    return "green";
  } else {
    return "red";
  }
  
}
echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
?>