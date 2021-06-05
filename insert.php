<?php
session_start();

$servername= "localhost";
$uname = "root";
$pword= "";
$dbname = "mydb";
/**/
$conn = new mysqli($servername,$uname,$pword,$dbname);

if(isset($_POST['register-submit']))
{
	if($conn)
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$que = "Select username,password,email from register where email='".$email."'";
		$result = mysqli_query($conn,$que);
		if(mysqli_num_rows($result) > 0)
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
if(isset($_POST['login-submit']))
{
        $ema = $_POST['lemail'];
	    $pass = $_POST['lpword'];

	$que = "SELECT id,username,password,email FROM register WHERE email='".$ema."' AND password='".$pass."'";

	$result = mysqli_query($conn,$que);
	
	if(mysqli_num_rows($result)>0 )
	{										
	  while($row = $result->fetch_assoc())												
    {				
	$uid =	$row['id'];
	$em = $row['email'];
	$_SESSION['userid']=$uid;
	$_SESSION['emid']=$em;
	header("Location: tab.php");
	}
    }
	elseif($ema=='' && $pass=='')
	{ 
		echo "Email or password cannot be empty";
	}
	else
	{
		echo "Login unsuccessful";
	}
}
if(isset($_POST['logout']))
{
		header("Location: login.php");
}
?>