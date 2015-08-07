<?php 

$sample = array();
for ($i = 0; $i < 100; $i++)
{
	$sample[] = rand(0, 10000);
}

function bubble_sort($array)
{
	$sorted = false;
	while ($sorted == false)
	{
		$sorted = true;
		for ($i = 0; $i < count($array) - 1; $i++)
		{
			$current_value = $array[$i];
			$next_value = $array[$i + 1];
			if ($next_value < $current_value)
			{
				$array[$i] = $next_value;
				$array[$i + 1] = $current_value;
				$sorted = false;
			}
		}
	}
	return $array;
}

$sorted_array = bubble_sort($sample);
var_dump($sorted_array);

 ?>