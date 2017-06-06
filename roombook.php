<?php
session_start();
// connection with database server
$con= mysql_connect("localhost", "root", "");
if($con)
//echo "Server connection established";

//connection with database

$selected = mysql_select_db("miniproject",$con);
//if($selected)
//	echo "database selected";
//else 
//{
//	die('datbaase couldnt be selected ' . mysql_error());
//}

if(isset($_POST['submit']))
{
$roomtype = $_POST['roomtype'];
$admissionDate = $_POST["DD"] . "/" . $_POST["MM"] . "/". $_POST["YYYY"];

$floor = $_POST['floor'];

$room = $_POST['room'];
$_SESSION['room']=$room;

$query1="INSERT INTO roominfo(roomtype,admissiondate,floor,roomno) VALUES('$roomtype','$admissionDate','$floor','$room')";

//execution of query
$res=mysql_query($query1,$con);
if($res)
header('Location:studentdetails.html');
//else{
//	die('Could not enter data: ' . mysql_error());

//}
if (mysql_errno() == 1062) {

	die('<h1>room number is already booked<h1>');
}


mysql_close($con);
}
;
?>

