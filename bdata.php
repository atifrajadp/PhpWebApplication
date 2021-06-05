<?php
session_start();

$servername= "localhost";
$username = "root";
$password= "";
$dbname = "mydb";


$conn = new mysqli($servername,$username,$password,$dbname);

$name = $_POST['name'];
$phone = $_POST['phno'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];

if(!$conn->connect_error)
{
	if(isset($_POST['btnupdate']))
	{
   $email = $_SESSION['emid'];
		$filename=$_FILES['image_to_upload']['name'];
		$filetype=pathinfo($filename,PATHINFO_EXTENSION);
		
		$extensions_arr = array("jpg","jpeg","png","gif");
		
		if( in_array($filetype,$extensions_arr) )
		{		
	   		$target_dir = "uploads/";
   			$target_file = $target_dir . basename($filename);
      		if (move_uploaded_file($_FILES['image_to_upload']['tmp_name'], $target_file))
      		 {
      			$query = "INSERT INTO data(name,phone,birthday,img,email) VALUES ('".$name."','".$phone."','".$birthday."','".$target_file."','".$_SESSION['emid']."')";
      			$conn->query($query);	  
      }

    	}
    }
}
?>

