<?php
namespace Codecademy;
//Identical and Not Identical Operators
//Rahmi Syafitri

function agreeOrDisagree($satu, $dua)
{
    if ($satu === $dua) {
        return "You agree!";
    } else {
        return "You disagree!";
    }
}
//NIM : 2255201006
echo agreeOrDisagree("left", "right"); 
echo "\n\n";
echo agreeOrDisagree("ok", "ok"); 
echo "\n\n";
function checkRenewalMonth($renewal_month){
  $current_month = date("F");
  if ($renewal_month !== $current_month) {
    return "Welcome!";
  } else {
    return "Time to renew";
  }
}
//Kelas A
$current_month = date("F");
echo checkRenewalMonth($current_month);

echo "\n\n";
echo checkRenewalMonth("July");
?>