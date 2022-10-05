<html>
<head>
<title>PIDOPHParrays2.2</title>
</head>
<body>
<?php

$a = array (25,12,43);
$fr = array_fill(0, count($a), 0);
$check = -1;
echo("Input 3 elements in the array: <br> ");
for($i = 0; $i < count($a); $i++)
{
	$key=$a[$i];
	$count = 1;
		for($j = $i+1; $j < count($a); $j++)
		{
			if($a[$i] == $a[$j])
			{
				$count++;	
				$fr[$j] = $check;
			}
		}
		if($fr[$i] != $check)
		$fr[$i] =$count;
        echo "element - [".$i."]"." : ".$key. "<br>";
}


echo ("<br>The frequency of all elements of an array : <br>" );
for( $i = 0; $i < count($fr); $i++)
{
	if($fr[$i] != $check)
	{
	echo( $a[$i] ." occurs " );
	echo( $fr[$i]." times.");
	echo("<br>");
	}
}

?>
</body>
</html>
