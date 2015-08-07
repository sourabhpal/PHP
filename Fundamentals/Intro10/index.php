<?php

function print_name($array)
{
	$number_of_keys = count($array);
	foreach ($array as $key => $value)
	{
		echo "There are ". $number_of_keys ." keys in this array: ". $key .", ". $key;
		foreach ($array as $key => $value)
		{
			echo "<br>The value in the key ". $key ." is ". $value;
		}
	}
}

$users['first_name'] = "Sourabh";
$users['last_name'] = "Pal";

print_name($users);

?>