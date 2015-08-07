<?php
$table = '';
if(isset($_POST['Width']) && isset($_POST['height']))
{
    $rows = (int) $_POST['height'];
    $cols = (int) $_POST['Width'];
    $i=1;
    $table = '<table>';
    for($r=0;$r<$rows;$r++)
    {
        $table .= '<tr>';
        for($c=0;$c<$cols;$c++)
        {
            $table .= '<td>'.$i.'</td>';
            $i++;   
        }
        $table .= '</tr>';   
    }
    $table .= '</table>';
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Create HTML Tables with JS or PHP</title>
<style>
table
{
    border-collapse:collapse;
    border: solid 1px black;
}
table tr td, table tr th
{
    border: solid 1px black;
}
</style>
</head>
<body>
<form method="post">
    <table>
        <tr><th>Height</th><td><input id="height" name="height" value="<?php if(isset($rows)){ echo $rows;}else{ echo 1; } ?>" type="number" min="1" max="50" /></td></tr>
        <tr><th>Width</th><td><input id="Width" name="Width" value="<?php if(isset($cols)) { echo $cols;} else { echo 1; } ?>" type="number" min="1" max="50" /></td></tr>
        <tr><td colspan="2"><input id="sub" value="Create Table" type="submit" /></td></tr>
    </table>
</form>
<div id="newtable">
<?php 
    echo $table;
?>
</div>
</body>
</html>