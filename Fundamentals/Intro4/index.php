<?php

$numbers = array(1,2,5,10,255,3);
$average = 0;

for ($i = 0; $i < count($numbers); $i++)
{
	$average += $numbers[$i];
}

echo $average/count($numbers);
?>