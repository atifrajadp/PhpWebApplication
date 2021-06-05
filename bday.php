<html>
<title>    </title>
<link rel="stylesheet" type="text/css" href="stile.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<head>

<body>



<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">HEADER</a></h1>
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
  <a href="#">Services</a>
  <a href="#">Contact US </a>
</div>

<div class="snav">
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"> </a>
</div>

<form class="logout" action="insert.php" method="post">
<button name="logout"> Log out </button>
</form>

<div class="page-container">
        <form action="bdata.php" method="POST" enctype="multipart/form-data">
			  <h1 style='font-family: "Times New Roman", Times, serif; color: black;'>Enter your data</h1>
        <input type="text" name="name" class="Name" placeholder="Name">
        <input type="number" name="phno" class="Tele" placeholder="Number Phone">
				<input type="date" name="birthday" class="Address" placeholder="Birthdate">
				<input type="file" name="image_to_upload">
        <input type="email" name="email" style="color:black;"
         value="
         <?php 
        session_start();
        echo $_SESSION['emid'];
         ?>
         ">
        <button type="submit" value="Add" name="btnupdate">Submit</button>
        </form>
        </div>
</form>

</body>

</head>
</html>