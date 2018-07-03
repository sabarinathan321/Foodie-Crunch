<?php
$host='localhost';
$un='root';
$p='';
$db='foodie';
$con = mysqli_connect($host,$un,$p,$db);
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=mysqli_query($con,"INSERT INTO room VALUES ('$a','$b','$c','$d','$e','$f')");
if($g)
echo 'success';
else
echo 'failed';
?>
