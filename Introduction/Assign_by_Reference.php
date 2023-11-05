<?php

//Assign by Reference
//Rahmi Syafitri
//2255201006
//kelas A

/* Imagine a lot of code here */  
  $very_bad_unclear_name = "5 toppokki";

// Write your code here:
  $order =& $very_bad_unclear_name; 

  $order .= ", 2 cheeseburger";

  $order .= ", 3 salads";
    
  // Don't change the line below
  echo "\nYour order is: $very_bad_unclear_name.";
?>