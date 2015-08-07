<?php 
header('Content-type: text/css');

function random_color()
{
	$color = rand(1,6);

	switch ($color) {
		case 1:
			echo "red";
			break;
		case 2:
			echo "blue";
			break;
		case 3:
			echo "green";
			break;
		case 4:
			echo "yellow";
			break;
		case 5:
			echo "purple";
			break;
		case 6:
			echo "orange";
			break;
		// default:
		// 	echo "black";
		// 	break;
	}
}

?>

h1
{
	color: <?php echo random_color(); ?>;
}
p
{
	color: <?php echo random_color(); ?>;
}