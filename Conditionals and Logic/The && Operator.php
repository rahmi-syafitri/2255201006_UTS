<?php
// The && Operator
// Rahmi Syafitri
namespace Codecademy;
function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "CLAP!";
  }
    else {
    return ":(";
  }

}
// NIM : 2255201006
// kelas A
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 
?>