<?php
   $table='<table cellpadding="5" cellspacing="2">
   <tbody>
      <tr>
         ';
   $row=1;
   $count=1;
   $i=1;
   $end=122;
   $diff=11;
   $less=(1+$diff);
   $more=($less+$diff);
   for($i;$i<=$end;$i++) {
      if($i===1) {$table.='<th>&nbsp;</th>';}
      elseif($i>1 && $i<12) {
         $table.='<th>'.$count.'</th>';
         $count++;
      }
      elseif($i===12) {
         $table.='<tr><th>'.$row.'</th>';
         $count=1;
      }
      else {
         if($i===$end) {
            $table.='</tr>';
            break;
         }
         elseif($i>$less && $i<$more) {
            $table.='<td>'.($row*$count).'</td>';
            $count++;
         }
         elseif($i===$more) {
            $row++;
            $table.='</tr><tr><th>'.$row.'</th>';
            $count=1;
            $less=($less+$diff);
            $more=($more+$diff);
         }
      }
   }
   $table.='
   </tbody>
</table>';
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
   <title>PHP Multiplication Table</title>
   <meta charset="utf-8" />
   <style>
		body {font:normal 12px tahoma,sans-serif;}
		table {background-color:#000;border:2px solid #700;}
		th,td {width:30px;height:30px;}
		th {background-color:#c0c;color:#fff;}
		td {background-color:#ccc;text-align:center;}
		/* basic color for the upper-left cell and cells in general */
		table.operation tbody tr,
		table.operation thead tr th:first-child
		 {
		    background: white;
		}

		/* color header cells */
		table.operation th {
		    background: #CCF;
		}

		/* darken the even rows */
		table.operation tbody tr:nth-child(even) {
		    background: #DDD;
		}

		/* color every third column */
		table.operation tbody td:nth-child(3n+1) {
		    background: #DDF;
		}

		/* darken+color even row headers & every 3rd column headers  */
		table.operation thead th:nth-child(3n+1),
		table.operation tbody tr:nth-child(even) th {
		    background: #BBE;
		}

		/* darken & color cells in even rows and 3rd columns */
		table.operation tbody tr:nth-child(even) td:nth-child(3n+1) {
		    background: #CCE;
		}
   </style>
</head>
<body>
   <?php echo($table); ?>
</body>
</html>