<?php
session_start();
error_reporting(0);
$servername = "localhost";
$uname = "root";
$pword="";
$dbname="signup";

$conn = new mysqli($servername,$uname,$pword,$dbname);


if(isset($_POST['btnlogin']))
{
	extract($_POST);

	$que = "Select username,password,email from register where email='".$lg_email."' AND password='".$lg_password."'";
		
	$result = mysqli_query($conn,$que);
	
	if(mysqli_num_rows($result)>0 )
	{
		echo "Login successful";

	}
	else
	{
		echo "Login unsuccessful";

	}
}

if(isset($_POST['btnsignup']))
{
	if($conn)
	{

		echo "connected";

		$username = $_POST['username'];
		$password = $_POST['pass'];
		$email = $_POST['email'];
		$que = "Select username,password,email from register where email='".$email."'";
		$result = mysqli_query($conn,$que);
		
		if(mysqli_num_rows($result)>0 )
		{
			echo "Already inserted";
		}
		else
		{
			$query = "INSERT INTO register(username,password,email) VALUES('".$username."','".$password."','".$email."')";
			$conn->query($query); 
			echo "Inserted";
		}
	}
	else 
	{
		echo "not connected";
	}
}

?>