<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIDOPHPExerciseArrays2</title>
</head>
<body>
        <?php
		$cities = array("Tokyo","Mexico City","New York City","Mumbai",
        "Seoul","Shanghai","Lagos","Buenos Aires","Cairo", "London.");
		$counter = count($cities);
		for($i = 0; $i < $counter; $i++){
            if ($i<9){echo $cities[$i].', ';}
            else {echo $cities[$i];}
		}
		echo "<br/>";
		sort($cities);
		?>
<!-- ------------------------------------------------------------------------------ -->
		<ul>
			<?php
			for($i = 0; $i < $counter; $i++){
				echo "<li>$cities[$i]</li>";
			}
			?>
		</ul>
<!-- ------------------------------------------------------------------------------ -->
		<ul>
			<?php
			$thecities = array("Los Angeles", "Calcutta", "Osaka", "Beijing");
			$citiesnew = array_merge($cities, $thecities);
			sort($citiesnew);
			$counter2 = count($citiesnew);
			for($i = 0; $i < $counter2; $i++){
				echo "<li>$citiesnew[$i]</li>";
			}
			?>
		</ul>

</body>
</html>