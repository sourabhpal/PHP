<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
echo "<select>";
for ($i = 0; $i < count($states); $i++)
{
	echo "<option>{$states[$i]}</option>";
}
echo "</select><br><br>";

echo "<select>";
foreach ($states as $state)
{
	echo "<option value='$state'>$state</option>";
}
echo "</select><br><br>";

$states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');
echo "<select>";
foreach ($states as $state)
{
	echo "<option value='$state'>$state</option>";
}
echo "</select>";

?>