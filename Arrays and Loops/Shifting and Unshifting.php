<?php

//Shifting and Unshifting
//Rahmi Syafitri
//2255201006
//Kelas A

namespace Codecademy;
$record_holders = [];
// Write your code below:
array_unshift($record_holders, "Tim Montgomery", 
"Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);
array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");  

array_shift($record_holders);
echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Usain Bolt");

echo implode(", ", $record_holders) . "\n\n";

?>