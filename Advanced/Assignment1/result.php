<?php 
include 'head.php';
echo "<div><strong>Submitted Information</strong>";
echo "<p>Name: {$_POST['full_name']}</p>";
echo "<p>Dojo Location: {$_POST['location']}</p>";
echo "<p>Favorite Language: {$_POST['language']}</p>";
echo "<p>Comment: {$_POST['comment']}</p>";
echo "<button onclick={history.go(-1);}>Back </button></div>";

include 'footer.php';
?>	