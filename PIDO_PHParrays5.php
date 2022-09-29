<!DOCTYPE html>
<html>
<head>
<title>PIDOPHParrays2.3</title>
</head>
<body>

<?php
$arr = array(25, 47, 42, 56, 32);
$oddArray = array();
$evenArray = array();
echo "Input 5 numbers in the array: " . "<br>";
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "Element - ["."$i"."] : "."$arr[$i]"."<br>" ;
}

$j = 0,$k = 0;
;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
echo "<br>" . "Even Numbers : " . "<br>";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] " . "\n" ;
}
echo "<br>Odd Numbers :<br> ";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>

</body>
</html>