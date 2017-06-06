<?php
session_start();
// connection with database server
$con= mysql_connect("localhost", "root", "");
if($con)
echo "Server connection established";

//connection with database

$selected = mysql_select_db("miniproject",$con);
if($selected)
	echo "database selected";
else 
{
	die('datbaase couldnt be selected ' . mysql_error());
}

if(isset($_POST['submit']))
{
$userid = $_POST['username'];
$pssword = $_POST['password'];
$secque = $_POST['question'];
$secans = $_POST['answer'];
$address = $_POST['message'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$_SESSION['username']=$userid;

$query1="INSERT INTO users(username,password,security_que,security_ans,address,email,mobile) VALUES('$userid','$pssword','$secque','$secans','$address','$email','$mobile')";

//execution of query
$res=mysql_query($query1,$con);
if($res)
header('Location:login.html');
else{
	die('Could not enter data: ' . mysql_error());
}
mysql_close($con);
}
;
?>

