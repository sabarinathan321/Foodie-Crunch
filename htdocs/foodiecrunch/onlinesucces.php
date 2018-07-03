<?php
$host='localhost';
$un='root';
$p='';
$db='foodie';
$con = mysqli_connect($host,$un,$p,$db);
if($con)
echo 'sucess';
else
echo 'failed';

$b=$_POST['time'];
$d=$_POST['address'];
$dat=$_POST['number'];

$menu1=$_POST['m1'];
$menuarray1 = explode('|',$menu1);
$menuq1=$_POST['mq1'];
//$bfarray1n=$bfarray1_explode[0];
//$bfarray1q=$bfarray1_explode[1];
$menu2=$_POST['m2'];
$menuarray2 = explode('|',$menu2);
$menuq2=$_POST['mq2'];
$menu3=$_POST['m3'];
$menuarray3 = explode('|',$menu3);
$menuq3=$_POST['mq3'];
$menu4=$_POST['m4'];
$menuarray4 = explode('|',$menu4);
$menuq4=$_POST['mq4'];
$menu5=$_POST['m5'];
$menuarray5 = explode('|',$menu5);
$menuq5=$_POST['mq5'];
$menu6=$_POST['m6'];
$menuarray6 = explode('|',$menu6);
$menuq6=$_POST['mq6'];
$menu7=$_POST['m7'];
$menuarray7 = explode('|',$menu2);
$menuq7=$_POST['mq7'];

//$out="INSERT INTO table(date1,people) VALUES ('$f','$a')";
$in="INSERT INTO tableonline VALUES ('$b','$d','$dat','$menuarray1[0]','$menuarray1[1]','$menuq1',     '$menuarray2[0]','$menuarray2[1]','$menuq2','$menuarray3[0]','$menuarray3[1]','$menuq3','$menuarray4[0]','$menuarray4[1]','$menuq4','$menuarray5[0]',           '$menuarray5[1]','$menuq5','$menuarray6[0]','$menuarray6[1]','$menuq6','$menuarray7[0]','$menuarray7[1]','$menuq7')";

$g=mysqli_query($con,$in);
if($g)
echo 'success';
else
echo 'failed';
?>
