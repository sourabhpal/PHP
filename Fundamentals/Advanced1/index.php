<?php 

function buildTable($array)
{
	$html_output = "";
	$fullName = "";
	$html_output .= "<table><thead><tr><th>User #</th><th>First Name</th><th>Last Name</th><th>Full Name</th><th>Full Name in UPPER CASE</th><th>Length of Full Name</th></tr></thead><tbody>";
	
	foreach ($array as $key => $value) 
	{
		$userNumber = $key + 1;

		if ($userNumber%5 == 0)
		{
			$html_output .= "<tr id='highlight'><td>". $userNumber;
			foreach ($value as $key2 => $value2) 
			{
				$html_output .= "<td>". $value2 ."</td>";
				$fullName .= $value2 ." ";
			}
			$html_output .= "<td>". $fullName ."</td>";
			$fullNameUpper = strtoupper($fullName);
			$html_output .= "<td>". $fullNameUpper ."</td>";
			$trimName = trim($fullName, " ");
			$nameLength = strlen($trimName) - 1;
			$html_output .= "<td>". $nameLength ."</td>";
			$fullName = "";
			$html_output .= "</tr>";
		}
		else
		{
			$html_output .= "<tr><td>". $userNumber;
			
			foreach ($value as $key2 => $value2) 
			{
				$html_output .= "<td>". $value2 ."</td>";
				$fullName .= $value2 ." ";
			}
			$html_output .= "<td>". $fullName ."</td>";
			$fullNameUpper = strtoupper($fullName);
			$html_output .= "<td>". $fullNameUpper ."</td>";
			$trimName = trim($fullName, " ");
			$nameLength = strlen($trimName) - 1;
			$html_output .= "<td>". $nameLength ."</td>";
			$fullName = "";
			$html_output .= "</tr>";
		}
	}
	
	$html_output .= "</tbody></table>";
	
	return $html_output;
}

$users = array( 
	array('first_name' => 'Michael', 'last_name' => 'Choi'),
	array('first_name' => 'John', 'last_name' => 'Supsupin'),
	array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	array('first_name' => 'KB', 'last_name' => 'Tonel'),
	array('first_name' => 'Sourabh', 'last_name' => 'Pal'),
	array('first_name' => 'Dwyane', 'last_name' => 'Wade'),
	array('first_name' => 'Lebron', 'last_name' => 'James'),
	array('first_name' => 'Kobe', 'last_name' => 'Bryant'),
	array('first_name' => 'Michael', 'last_name' => 'Jordan'),
	array('first_name' => 'Chris', 'last_name' => 'Bosh'),
	array('first_name' => 'Carmelo', 'last_name' => 'Anthony'),
	array('first_name' => 'Steve', 'last_name' => 'Nash'),
	array('first_name' => 'Dirk', 'last_name' => 'Nowitzki'),
	array('first_name' => 'Ray', 'last_name' => 'Allen'), 
);

?>

 <!DOCTYPE html>
 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<title>Advanced 1 - HTML Table</title>
	 	<style type="text/css">
			table {
				font-family: Verdana;
				border-collapse: collapse;
			}
			tbody {
				text-align: justify;
				font-size: 12px;
			}
			thead {
				color: #454545;
				font-size: 13px;
			}
			th {
				border: solid 1px;
				border-color: black;
			}
			td {
				border: solid 1px;
			}
			#highlight {
				background-color: black;
				color: white;
			}
	 	</style>
	 </head>
	 <body>
	 	<?php echo buildTable($users); ?>
	 </body>
 </html>