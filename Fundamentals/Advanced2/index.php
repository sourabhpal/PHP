<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>
		function random_color()
      	{
	        var rgb = ['a','b','c','d','e','f','0','1','2','3','4','5','6','7','8','9'];
	        color = '#';  //this is what we'll return!
	        for(var i = 0; i < 6; i++) 
	        {
	          x = Math.floor((Math.random()*16))
	          color += rgb[x]; 
	        };
	        return color;
     	 }

		$(document).ready(function() {
			// $(".dark").hover(function() {
			// 	// console.log("Hover.");
			// 	$(this).css('background-color', random_color());
			// })
			function epilepticSeizure() {
				$(".dark").each(function(){
					$(this).css('background-color', random_color());
				})
			}
			setInterval(function(){epilepticSeizure()},50);	
			
		});
	</script>
	<style type="text/css">
	
	#board {
		width: 640px;
		height: 640px;
		border: 1px solid #888;
		line-height: 0;
	}
	.dark {
		background-color: #888;
		display: inline-block;
		width: 80px;
		height: 80px;
		margin: 0px;
		padding: 0px;
	}
	.light {
		background-color: #fff;
		display: inline-block;
		width: 80px;
		height: 80px;
		margin: 0px;
		padding: 0px;
	}
	</style>
</head>
<body>
	<div id="board">

		<?php

		$color = false;
		$colors = array("light", "dark");
		$divStart = "<div class=\"";
		$divEnd = "\"></div>";

		for ($i = 0; $i < 8; $i++)
		{
			for ($j = 0; $j < 8; $j++)
			{
				if (!$color)
				{
					echo $divStart . $colors[0] . $divEnd;
				}
				else
				{
					echo $divStart . $colors[1] . $divEnd;

				}

				$color  = !$color;
			}

			$color  = !$color;
		}
		echo "</div>\n";
		?>	

	</body>
	</html>

