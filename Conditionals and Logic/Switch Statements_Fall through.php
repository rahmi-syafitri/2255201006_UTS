<?php
//Switch Statements: Fall through
//Rahmi Syafitri
namespace Codecademy;
// NIM : 2255201006
//kelas A
function returnSeason ($month){
  switch ($month) {
    case "December":
    case "January":
    case "February":  
      return "winter";
    case "March":
    case "April":
    case "May":  
      return "spring";
    case "June":
    case "July":
    case "August":  
      return "summer";
    case "September":
    case "October":
    case "November":  
      return "fall";   
    } 
}
?>