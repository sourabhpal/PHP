<?php 
session_start();
if (!isset($_SESSION['guessCheck']))
{
	$_SESSION['guessCheck'] = "Make a guess";
}

if (!isset($_SESSION['random']))
{
	$randomNumber = rand(1,100);
	$_SESSION['random'] = $randomNumber;	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Great Number Game</title>
	<style>
		body {
			text-align: center;
			font-family: Tahoma;
		}
		#submit {
			display: block;
			margin: auto;
			margin-top: 5px;
		}
		div {
			height: 200px;
			width: 200px;
			text-align: center;
			margin: auto;
			vertical-align: center;
		}
		#wrong {
			background-color: red;
			color: white;
		}
		#correct {
			background-color: green;
			color: white;
		}
		.move {
			vertical-align: middle;
			padding-top: 95px;
		}
	</style>
</head>
<body>
	<h1>Welcome to the Great Number Game!</h1>
	<h4>I am thinking of a number between 1 and 100</h4>
	<h4>Take a guess!</h4>
	<form action="process.php" method="post">
	<?php 
		echo $_SESSION['random'];
		echo "<br>";
		if ($_SESSION['guessCheck'] == "<div id=\"correct\"><p class=\"move\">Correct!!</p></div>")
		{
			echo $_SESSION['guessCheck'];
			$_SESSION['reset'] = true;
			if (isset($_SESSION['reset']))
			{
				$_SESSION['resetted'] = true;
				echo "<br><input type=\"submit\" value=\"Reset\">";
			}
			
		}
		else
		{
			echo $_SESSION['guessCheck'];
			echo "<br><input type='text' name='guess'>";
			echo "<input id='submit' type='submit' value='Submit'>";
		}
	?>
	
		
	</form>
</body>
</html>