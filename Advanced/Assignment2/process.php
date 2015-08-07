<?php 

session_start();
if (isset($_SESSION['random']))
{
	if(isset($_POST['guess']))
	{
		if ($_POST['guess'] > $_SESSION['random'])
		{
			$_SESSION['guessCheck'] = "<div id=\"wrong\"><p class=\"move\">Too high!</p></div>";
		}
		else if ($_POST['guess'] < $_SESSION['random'])
		{
			$_SESSION['guessCheck'] = "<div id=\"wrong\"><p class=\"move\">Too low!</p></div>";
		}
		else
		{
			$_SESSION['guessCheck'] = "<div id=\"correct\"><p class=\"move\">Correct!!</p></div>";			
		}
	}
}
else
{
	$randomNumber = rand(1,100);
	$_SESSION['random'] = $randomNumber;
}
if (isset($_SESSION['resetted']) == true)
{
	session_destroy();
	header('Location: index.php');
}
header('Location: index.php');

 ?>