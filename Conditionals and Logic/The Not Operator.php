<?php
// The Not Operator
// Rahmi Syafitri

namespace Codecademy;
function duckDuckGoose($is_goose){
  if ($is_goose){
    return "goose!";
  }
  else {
    return "duck";
      }
}
// NIM : 2255201006
// Kelas A

echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(TRUE);
?>