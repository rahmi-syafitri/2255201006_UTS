<?php
//Elseif Statements
//Rahmi Syafitri
namespace Codecademy;
function whatRelation($percentage_DNA)
{
  if ($percentage_DNA ==100){
    echo "identical twins";
  }
  elseif ($percentage_DNA > 34){
    echo "parent and child or full siblings";
  }
  elseif ($percentage_DNA > 13){
   echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
 }
  elseif ($percentage_DNA > 5) {
   echo "first cousins";
 }
 elseif ($percentage_DNA > 2){
   echo "second cousins";
 }
 elseif ($percentage_DNA > 0){
   echo "third cousins";
 }
 else {
   echo "not genetically related";
 }
}
//Nim: 2255201006
//kelas A
whatRelation(100);
echo "\n\n";
whatRelation(56);
echo "\n\n";
whatRelation(18);
echo "\n\n";
whatRelation(10);
echo "\n\n";
whatRelation(3);
echo "\n\n";
whatRelation(1);
?>