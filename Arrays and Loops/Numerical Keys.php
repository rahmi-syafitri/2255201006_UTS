<?php
namespace Codecademy;

//Numerical Keys
//Rahmi Syafitri
//2255201006
//kelas A

$hybrid_array = ["Rahmi", "Syafitri", 30, 95];
$hybrid_array[8] = "five more";

print_r($hybrid_array);

array_push($hybrid_array, rand());

echo $hybrid_array[9];

?>