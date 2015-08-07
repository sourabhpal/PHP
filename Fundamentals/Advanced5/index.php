<?php 

$sample = array();
for ($i = 0; $i < 100; $i++)
{
	$sample[] = rand(0, 10000);
}

function insertion_sort($array)
{
	for ($i = 0; $i < count($array); $i++)
	{
		$value = $array[$i];
		$j = $i;
		while ($j > 0 && $array[$j - 1] > $value)
		{
			$array[$j] = $array[$j - 1];
			$j -= 1;
		}
		$array[$j] = $value;
	}
	echo microtime();
	return $array;
}

$sorted_array = insertion_sort($sample);
var_dump($sorted_array);

 ?>