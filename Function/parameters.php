<?php
// Parameters
// Write your code below:
// Rahmi Syafitri
// Nim : 2255201006
// kelas A

function increaseEnthusiasm($str_rahsya)
{
  return $str_rahsya . "!";
}

function repeatThreeTimes($str_rahsya)
{
  return $str_rahsya . $str_rahsya. $str_rahsya;
}  

echo increaseEnthusiasm("hai");

echo repeatThreeTimes("apa");

echo increaseEnthusiasm(repeatThreeTimes("apa kabar"));
?>