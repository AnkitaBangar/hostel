<?php
session_start();
// connection with database server
$con= mysql_connect("localhost", "root", "");
if($con)
echo "";

//connection with database

$selected = mysql_select_db("miniproject",$con);
//if($selected)
//	echo "database selected";
//else 
//{
//	die('datbase couldnt be selected ' . mysql_error());
//}

if(isset($_POST['submit']))
{
	$ID=$_POST['studentid'];

$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$gender = $_POST['gender'];
$address = $_POST['message'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$degree = $_POST['Degree'];
$year = $_POST['year'];
$colgname = $_POST['Colgname'];



$_SESSION['studentid']=$ID;


$query2="INSERT INTO students(studentid,First_name,Last_name,gender,address,Degree,year,College_name,city,State,Pincode) VALUES ('$ID','$fname','$lname','$gender','$address','$degree','$year','$colgname','$city','$state','$pincode')";

//execution of query
$res=mysql_query($query2,$con);
if($res)
//header('Location:home.html');
	echo "<h1>Hostel booking successfully registered<h1>";
if (mysql_errno() == 1062) {

	die('<h1>student id is already registered<h1>');
}
//else{
//	die('Could not enter data: ' . mysql_error());
//}
mysql_close($con);
}
;
?>
<!--<h1>Hostel booking successfully registered :)</h1>-->
