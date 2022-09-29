<!DOCTYPE html>
<html>
<head>
<title>PIDOPHParrays2.1</title>
</head>
<body>

<?php
$num=array(3, 1, 1);

    $arrLength=count($num);
    $elementCount=array();
  for($i=0;$i<$arrLength;$i++)
    {
       $key=$num[$i];
      if($elementCount[$key]>=1)
       {
          $elementCount[$key]++;
       } else  {
          $elementCount[$key]=1;
       }       
       print("Element - "."[".$i."]"." : ".$key."<br>");
   }
   echo "Number of duplicates : $key";
?> 

</body>
</html>
