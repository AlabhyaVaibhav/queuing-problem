<?php 
session_start();
include 'connect.php';
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
if (isset($_POST['token']))
{
	$tokenid=$_POST['token'];
	$phone_number=$_POST['pnum'];
	$result = $con->prepare("SELECT * FROM signup WHERE token ='".$tokenid."' OR phone_number ='".$phone_number."' ");
	$result->execute();

	$row = $result->fetch();
	if($row>0){
		$_SESSION['token'] = $row['token'];
		$_SESSION['name'] = $row['full_name'];
		$_SESSION['pnum'] = $row['phone_number'];
		$_SESSION['email'] = $row['email'];   
		echo $tokenid;
		sleep(3);
		header("location:user_profile.php");
	}
}
else{
	echo "Oops";
}
?>
