<?php
namespace Codecademy;
//Changing and Removing Elements
//Rahmi Syafitri
//2255201006
//kelas A

$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($my_car);

// Write your code below:
$my_car["oil"] = "new and premium";

$my_car["tires"] = "new with deep treads";


unset ($my_car["filth"]);

print_r($my_car);
?>