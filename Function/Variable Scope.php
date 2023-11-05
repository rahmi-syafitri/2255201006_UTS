<?php
// Variable Scope
// Rahmi Syafitri
// 2255201006
// kelas A

$language = "PHP";
$topic = "function";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}

echo generateLessonName($topic);
?>