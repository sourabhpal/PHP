<?php

function multiply($array, $factor)
{
	$arr = array();
	foreach ($array as $value)
	{
		$product = $value * $factor;
		array_push($arr,$product);
	}

	var_dump($arr);
}

$A = array(2,4,6,10,16);
$B = multiply($A,5);

?>