<?php

$numbers = array();

for ($i = 1; $i < 20000; $i+=2)
{
	array_push($numbers, $i);
}

var_dump($numbers);
?>