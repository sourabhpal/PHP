<?php 

$sample = array();
for ($i = 0; $i < 100; $i++)
{
	$sample[] = rand(0, 10000);
}

// var_dump($sample);

function selection_sort($array)
{
	for ($i = 0; $i < count($array); $i++)
	{
		$min_key = null;
		$min_value = null;
		$max_key = null;
		$max_value = null;
		for ($j = $i; $j < count($array); $j++)
		{ 
			if ($min_value == null || $array[$j] < $min_value)
			{
				$min_key = $j;
				$min_value = $array[$j];
			}
			if ($max_value == null || $array[$j] > $max_value)
			{
				$max_key = $j;
				$max_value = $array[$j];
			}
		}
		$array[$min_key] = $array[$i];
		$array[$i] = $min_value;
		$array[$max_key] = $array[$i];
		$array[$i] = $max_value;
	}
	return $array;
}

$sorted_array = selection_sort($sample);
var_dump($sorted_array);

 ?>