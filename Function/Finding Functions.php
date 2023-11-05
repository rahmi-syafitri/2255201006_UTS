<?php
// Finding Functions
// Rahmi Syafitri
// NIM : 2255201006
// Kelas A
namespace Codecademy;

// Write your code below:
function convertToShout($str)
{
  return strtoupper($str) . "!";
}

function tipGenerously($cost)
{
  return ceil($cost * 1.2);
}

function calculateCircleArea($diameter)
{
  return pi() * ($diameter/2)**2;
}

//Tests: 
echo convertToShout("woah there, buddy"); 
echo "\n";
echo convertToShout("i just don't know");

echo "\n";
echo tipGenerously(100.00); // Prints: 120
echo "\n";
echo tipGenerously(982.27); // Prints: 1179
echo "\n";
echo calculateCircleArea(6); 

echo "\n";
echo calculateCircleArea(29); 
?>