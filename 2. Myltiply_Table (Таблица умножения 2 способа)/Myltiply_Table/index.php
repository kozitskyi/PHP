<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php
$numbers = array(1,2,3,4,5,6,7,8,9);
echo("Цикл for");
echo '<br />';
echo '<br />';
echo"<table id=multiply1>";
for($i = 0; $i<9; $i++){
echo"<tr>";
	for ($j=0; $j < 9; $j++) { 
		
		echo "<td>";
		echo($numbers[$i]);
		echo(" * ");
		echo($numbers[$j]);
		echo(" = ");
		$result = $numbers[$i]*$numbers[$j];
		echo($result);
		echo "</td>";
		//echo '<br />';
		
	}
	echo"</tr>";
}
echo "</table>";
echo ('<br />');
echo ('<br />');

echo ("Цикл while");
echo ('<br />');
echo ('<br />');
$i=1;
echo ("<table id=multiply2><tr>");
while($i<=10){
	$j=1;
	while($j<=10){
		echo ("<td align=\"center\">".($i*$j)."</td>");
		$j++;
	}
	if($i !=10) echo ("</tr><tr>");
	$i++;
}
echo ("</tr></table>");
?>

</body>
</html>

