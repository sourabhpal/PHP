<?php

function car_factory($raw_materials) {
    $cars = array();
    foreach($raw_materials as $raw_material) {
       $cars[] = "<p>Just produced a {$raw_material['paint']} car that used {$raw_material['metal']} for the body and {$raw_material['rubber']} for the car's tires. </p>";
    }    
    return $cars;
}

$raw_materials = array(
   array(
      'rubber' => 'Natural Rubber',
      'metal' => 'Alloy',
      'paint' => 'Green'
   ),
   array(
     'rubber' => 'Nitrile',
     'metal' => 'Brass',
     'paint' => 'Red'
   )
);

$cars = car_factory($raw_materials);
var_dump($cars);

?>

<ul>
<?php
for($i = 1; $i <= 5; $i++) {
    echo "<li>Blue car finished round $i! <ul>";
    for($k = 1; $k <= 2; $k++) {
       echo "<li> Driver just ran and finished round $k! </li>";
    }
    echo "</ul></li>";
}
?>
</ul>