<?php 

$firstNumber = rand(1,100);
$secondNumber = rand(1,100);
$result = $firstNumber * $secondNumber;

 ?>

 $(document).ready(function() {
 	alert('<?php echo $firstNumber ." x ". $secondNumber ." = ". $result; ?>');
});