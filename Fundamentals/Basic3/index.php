<?php
echo "<h2> Starting the program!</h2>";
$heads = 0;
$tails = 0;
for ($i = 1; $i <= 5000; $i++)
{
	$coin = rand(1,2);
	if ($coin == 1)
	{
		$heads++;
		echo "Attemp #". $i .": Throwing a coin... It's a head! ... Got ". $heads ."head(s) so far and ". $tails ."tail(s) so far. <br>";
	}
	else if ($coin == 2)
	{
		$tails++;
		echo "Attemp #". $i .": Throwing a coin... It's a tail! ... Got ". $heads ."head(s) so far and ". $tails ."tail(s) so far. <br>";
	}
}
echo "<h2> Ending the program - thank you!</h2>";
?>