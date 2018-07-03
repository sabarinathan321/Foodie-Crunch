<html>
<head>
<title></title>
</head>
<body>

</body>
</html>
<?php

$host='localhost';
$un='root';
$p='';
$db='foodie';
if(isset($_POST['submit']))
{
$con=mysqli_connect($host,$un,$p,$db);

if($con){
	echo "success";
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$el=$_POST['email'];
	$st=$_POST['subject'];
	$msg=$_POST['message'];
	$ins="INSERT INTO queries(firstname,lastname,email,subject,message) VALUES('$fn','$ln','$el','$st','$msg')";
	$rr= mysqli_query($con,$ins);
	if($rr)
	echo 'inserted suceessfully';
else
	echo 'sorry';
}
else{
	echo unsuccess;
}}?>