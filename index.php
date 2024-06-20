<?php 

if(!file_exists("sensor.txt")){ 

file_put_contents("sensor.txt", "0\r\n0"); 

} 

 

if(isset($_GET['A']) && isset($_GET['B'])){ 

$VAR3=$_GET['A']; 

$VAR4=$_GET['B']; 

$TEXTO=$VAR3 . "\r\n" .$VAR4; 

file_put_contents("sensor.txt", $TEXTO); 

} 

 

$ARCHIVO = file_get_contents("sensor.txt"); 

$pos1= strpos($ARCHIVO,"\r\n"); 

$VAR1=substr($ARCHIVO,0,$pos1); 

$VAR2=substr($ARCHIVO,$pos1+1); 

?> 

 

<!DOCTYPE  html> 

<html> 

<head> 

  		<title>Sensor</title> 

  		<meta http-equiv="refresh" content="5"> 

</head> 

<body> 

<H3>A= <?php echo $VAR1 ?></H3> 

<H3>B= <?php echo $VAR2 ?></H3> 

</body> 

</html> 