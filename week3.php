<?php
$name= array('8','-1','2','3','0','5');
 $intArray =$name.map(Number);

$first = $intArray.sort(function(a,b){return b-a})[0];
$second = $intArray.sort(function(a,b){return b-a})[1];
$third = $intArray.sort(function(a,b){return b-a})[2];

echo "$first*$second*$third";

?>