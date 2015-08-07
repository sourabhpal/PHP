<?php

function draw_stars($array)
{
	foreach ($array as $value)
	{
		if (is_numeric($value))
		{
			for ($i = 0; $i < $value; $i++)
			{
				echo "*";
			}
		}
		else
		{
			for ($j = 0; $j < strlen($value); $j++)
			{
				$first_letter = substr($value, 0, 1);
				$first_letter = strtolower($first_letter);
				echo $first_letter;
			}
		}
		echo "<br>";
	}
}

$x = array(4, 6, 1, 3, 5, 7, 25);
$y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
draw_stars($x);
draw_stars($y);

?>