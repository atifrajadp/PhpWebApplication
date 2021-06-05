<html>
<title> </title>
<link rel="stylesheet" type="text/css" href="stile.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<head>
</head>
<style>
.namep
{
  margin: 20px 300px;
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
  text-decoration: solid;  
}

.phonep
{
  margin: 20px 300px; 
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
}

.emailp
{
  margin: 20px 300px; 
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
}

.bdayp
{
  margin: 20px 300px; 
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
}

.pic
{
  margin: -220px 40px; 
}

.bio
{
    border-radius: 100px;
    border: 4px solid #73AD21;
    padding: 0;
    margin: 15px 180px; 
    width: 1000px;
    height: 350px; 
}
</style>

<body>
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="" class="scrollto">HEADER</a></h1>
       </div>
        </div>
          </header>

<br><br>
<br><br>

<ul class="nav nav-pills">
  <li><a href="tab.php">Home</a></li>
  <li><a href="bday.php">About</a></li>
  <li><a href="">Menu 2</a></li>
</ul>

<div class="sidenav">
  <a href="#">About</a>
  <a href="#">Servics</a>
  <a href="#">Contact US </a>
</div>

<div class="snav">
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
</div>

<form class="logout" action="insert.php" method="post">
<button name="logout"> Log out </button>
</form>

<?php
session_start();
error_reporting(0);
$servername= "localhost";
$username = "root";
$password= "";
$dbname = "mydb";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn->connect_error)
{	
    $sql = "SELECT id,name,phone,birthday,img,email FROM data WHERE email='".$_SESSION['emid']."'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
     echo '<div class="bio">';
     echo "<p class='namep'><b> Name: </b> {$row['name']}</p>";
     echo "<p class='phonep'><b> Phone no: </b> {$row['phone']}</p>";
     echo "<p class='emailp'><b> Email: </b> {$_SESSION['emid']}</p>";
     echo "<p class='bdayp'><b> Birthday: </b> {$row['birthday']}</p>";
     echo "<img class='pic' src='".$row['img']."' height='150' width='150'/>";
     echo '</div>';
    }
}
else
{
   echo '<div class="bio">';
   echo "<p class='emailp'><b> Email: </b> {$_SESSION['emid']}</p>";
   echo '</div>';
}     
}
else 
{
    echo "Not connected";
}
?>
</body>
</html>


