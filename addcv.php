<?php
include_once("config.php");

if(isset($_POST["submit"]))
{
	
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$warea=$_POST['warea'];
	$experience=$_POST['experience'];
	$psc=$_POST['pcs'];
	$pinfo=$_POST['pinfo'];
	$qualification=$_POST['qualification'];
	$language=$_POST['language'];
	$paddress=$_POST['paddress'];
	$peraddress=$_POST['peraddress'];

	$sql="INSERT INTO cvinfo(name,phonenumber,email,workedarea,experience,personalcs,personalinformation,qualification,language,presentaddress,permanentaddress) values('$name','$phone','$email','$warea','$experience','$psc','$pinfo','$qualification','$language','$paddress','$peraddress')";
	if(mysqli_query($con,$sql))
	{
		echo 'data is successfully added';
	}
	else
	{
		echo 'data is not added';
	}
}
?>