<?php

ob_start();
session_start();
if (!isset($_SESSION["logged"])){
   $_SESSION["logged"] =false;
   $_SESSION["msg"] = "";
}
  ?>
<!doctype html>
<html>
<head>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://literarian.000webhostapp.com//CSS/Browse.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Book exchanging website">
	<meta name="Keywords" content="book exchange, educational resources, education, prince sultan university, psu">
	<meta name="author" content="Nora Alshaalan, Norah Alsabti">
	<title>Lirerarian | Browse Books</title>
	
	<!-- COLORS:
		Gray: #505659
		LightBlue: #A7C3CE
		White: #F1F2F2
		Red: #B43A47
		-->
	
</head>

<body onload="load()">
<div class="loading"> 
		<span class="dot dot-one"></span>
		<span class="dot dot-two"></span>
		<span class="dot dot-three"></span>
	</div>
	
	
	<div class="loadlayer"></div>
	<script>
		function load(){
			document.getElementsByClassName("loadlayer").style.display= "block";
			document.getElementsByClassName("loading").style.display= "block";
		}
	</script>	

	
		
	<div class="container-fluid">
		<header>
			<div class="container">
				<img src="Img/logo.png" alt="Logo" id="logo"> 
			</div>
	  </header>
		
		<nav class="navbar navbar-default">
			
			<div class="container-fluid menu">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="mainmenu">
					
					<ul class="nav navbar-nav">
					<li><a href="Literarian_home.php">Home</a></li> <!--CHANGE CURRENT -->
					<li class="current"><a href="Literarian_books.php">Browse Books</a></li>
					<li><a href="Literarian_courses.php">Browse Courses</a></li>
					<li><a href="Literarian_uni.php">Browse Universities</a></li>
					<li><a href="Literarian_about.php">About Us</a></li>
					<li><a href="Literarian_contact.php">Contact Us</a></li>
					 <?php
					      $login = "<li><a href='Literarian_login.php'>Login | Sign up</a></li>";
					      $profile =  "<li class='dropdown'>
							<a href='Literarian_login.php' class='dropdown-toggle' data-toggle='dropdown'>Profile <span class='caret'></span></a>
							<ul class='dropdown-menu'>
								<li class='submenu'><a href='profile.php'><span class='glyphicon glyphicon-upload'></span> Profile</a></li>
								<li class='submenu'><a href='uploadbook.php'><span class='glyphicon glyphicon-upload'></span> Upload</a></li>
								<li class='submenu'><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a> </li>
							</ul>
						</li>";
					      if ( $_SESSION["logged"]==true){
					      echo $profile;
					      }else{
					      echo $login;
					      }
					      ?>
					</ul>
				</div>
			</div>
		</nav>
		
		

		<div class="container">
		  <div class="col-xm-12 col-lg-6 col-md-6"><h2 class="title" style="border:0;">Books</h2></div> 
		  <div class="col-xm-0 col-lg-2 col-md-2"></div>
		  <div class="col-xm-12 col-lg-4 col-md-4" > 
				<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
				<input type="text" name="search" class="field" id="search" placeholder="Search...">
				</form>
		  </div>
		  <br>
		  <br>
		  <div class="title" style="margin-top:20px;"></div>
		  <div>
		  <?php
		    $connection = mysqli_connect("localhost","root","","literarian");
			if(!$connection) die ("Unable to connect to database.");
			 $numOfResults=0;



			 if (isset($_GET['uni'])){
			  $uid= $_GET['uni'];
			  $query = "SELECT * FROM books WHERE uni_id= '$uid'";
			  $books = mysqli_query($connection,$query);
		          $GLOBALS['numOfResults'] = mysqli_num_rows($books);
		          $numOfResults =mysqli_num_rows($books); 
			  for ($i=0; $i<$numOfResults; $i+=1){
					$row = mysqli_fetch_row($books);
					$bid = $row[0];		  
					echo "<div class='listcontent secondtitle'>
							
							   <a href='bookpage.php?bid=$bid'>$row[1]</a>
							
							 </div>";
			  
			  }}



			  else if (isset($_GET['course'])){
			  $cid= $_GET['course'];
			  $query = "SELECT * FROM books WHERE course= '$cid'";
			  $books = mysqli_query($connection,$query);
		          $GLOBALS['numOfResults'] = mysqli_num_rows($books);
			  for ($i=0; $i<$numOfResults; $i+=1){
					$row = mysqli_fetch_row($books);
					$bid = $row[0];		  
					echo "<div class='listcontent secondtitle'>
						   <a href='bookpage.php?bid=$bid'>$row[1]</a>
						 </div>";
			  
			  }}
		        else if(isset($_GET['search'])){
		             $search= $_GET["search"];
		             $query = "SELECT * FROM books WHERE name= '$search'";
		             $books = mysqli_query($connection,$query);
		              $GLOBALS['numOfResults'] = mysqli_num_rows($books);
		             for ($i=0; $i<$numOfResults; $i+=1){
					$row = mysqli_fetch_row($books);
					$bid = $row[0];		  
					echo "<div class='listcontent secondtitle'>
							   <a href='bookpage.php?bid=$bid'>$row[1]</a>
							 
							<div>";

		                              }
		    
		  }
		  
			$query = "SELECT * FROM books WHERE 1";
			$books = mysqli_query($connection,$query);
		        for($v=0;$v<10- $GLOBALS['numOfResults'];$v+=1){
			    $row = mysqli_fetch_row($books);
			    $bid = $row[0];		
		            echo "<div class='listcontent secondtitle'>
			                    <a href='bookpage.php?bid=$bid'>$row[1]</a>
			               </div>";
		    }
			?>
	
		  </div>
		  
		</div>		
</div><br><br>
	<footer>
		All rights reserved, 2017.
	
		<div id="date"></div>
		<script>
			document.getElementById("date").innerHTML = Date();
		</script>
	</footer>
	
</body>
</html>
