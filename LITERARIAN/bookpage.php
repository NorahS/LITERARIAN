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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Book exchanging website">
	<meta name="Keywords" content="book exchange, educational resources, education, prince sultan university, psu">
	<meta name="author" content="Nora Alshaalan, Norah Alsabti">
	<title>Lirerarian | Book Page</title>
	
	<!-- COLORS:
		Gray: #505659
		LightBlue: #A7C3CE
		White: #F1F2F2
		Red: #B43A47
		-->
	
	<style>
		body{
			font-family: Arial, Halvetica, sans-serif; 
			font-size: 15px;
			line-height: 1.5;
			padding: 0;
			margin: 0;
			background-color: #F1F2F2;
		}
		footer{
			background-color: #A7C3CE;
			text-align: center;
			font-size: 12px;
			color: #F1F2F2;
			letter-spacing: 2px;
			padding: 10px;
			margin-top: 40px;
			position: fixed;
			bottom: 0px;
			width: 100%;
		}
		.container{
			width:80%;
			margin: auto;
			overflow: hidden;
		}
		.title{
			font-size: 30px;
			font-weight: bold ;
			text-transform: uppercase;
			letter-spacing: 8px; 
			padding: 2px 0px;
			color: #A7C3CE;
			border-bottom: 2px solid #B43A47;
		}
		.secondtitle{
			font-size: 15px;
			font-weight: bold ;
			text-transform: capitalize; 
			padding: 5px 0px;
			color: #505659;
		}
		.container-fluid{
			width: 100%;
			padding: 0;
		}
		.content{ 
			margin-top: 20px;
			letter-spacing: 2px;
			text-align: justify;
		}
		header{
			padding: 25px;
			min-height: 50px;
		}
		
			#logo{
				display: block;
				margin: auto;
			}
		nav ul{
			list-style-type: none; 
			margin-top: 0;
			padding: 0;
			text-align: center;
		}
		.navbar {
			background-color: #F1F2F2;
			border: 0;
		}
		.navbar #mainmenu {
			margin-top: 20px;
			text-align: center;
		}
		#mainmenu ul {
			margin: auto;
			float: none;
			vertical-align: top;	
		}
		nav #mainmenu ul a{
			
			color: #505659;
			text-decoration: none;
			text-transform: capitalize;
			font-size: 17px;
			padding-top: 3px;
			padding-bottom: 3px;
		}
		nav #mainmenu .current a{
			border-bottom: 1px solid #B43A47;
			font-weight: bold;
		}
		nav #mainmenu a:hover{
			border-bottom: 1px solid #505659;
		}
		.navbar-nav {
			width: 100%;
			text-align: center;
			margin: 0;
		  }
		.navbar-nav li {
			float: none;
			display: inline-block;
		  }
		  
		.dropdown li{
			border: none;
			display: block;
			background-color: #F1F2F2;
			margin-top: 0px;
		}
		.dropdown li a:hover{
			margin: 0px;
			background-image: none;
			background-color: #A7C3CE;
		}
		
		.info{
			margin-top: 100px;
			margin-bottom: 110px;
		}
		.tableTitle{
			margin-top: 50px;
			text-align: center;
			clear: both;
		}
		.scrollable{
			border: 2px solid #A7C3CE;
			width: 100%;
			height:350px;
			overflow:scroll; 
			overflow-x: scroll;
			overflow-y: hidden;
		}
		.insidescroll{
			width:3000px;
			padding: 5px;
		}
		
		.preview{
			width: 210px;
			height:280px;
			margin:20px;
			text-align:center;
			float:left; 
			display:inline;
			border: 2px solid #A7C3CE;
		}
		
		#cover{
			width:350px;
			height: 430px;
			text-align:center;
			border:2px solid #A7C3CE;
		}
		.coverdiv{
			margin-top:10px;
			margin-bottom:40px;
			float: left; 
			margin-right:15px;
			
		}
		.details{
			margin-top:10px;
			display: block;
		}
		
		
		
	</style>
	
</head>

<body>
	<div class="container-fluid">
		<header>
			<div class="container">
				<img src="Img/logo.png" alt="Logo" id="logo"> 
			</div>
		</header>
		
		<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4"></div>

	<nav class="navbar navbar-default col-lg-12 col-md-12 col-sm-12 col-xm-12">
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
					<li><a href="Literarian_books.php">Browse Books</a></li>
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
								<li class='submenu current'><a href='uploadbook.php'><span class='glyphicon glyphicon-upload'></span> Upload</a></li>
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
		
		<div class="col-lg-2 col-md-2 col-sm-2 col-xm-12"></div>
		<section class="info col-lg-8 col-md-8 col-sm-8 col-xm-12">
		  <?php
		    if (isset($_GET['bid'])){
		    $id =$_GET['bid'];
		    $query ="SELECT * FROM books where id='$id'";
		    $connection = mysqli_connect("localhost","root","","literarian");
		    $result = mysqli_query($connection,$query);
		    $row = mysqli_fetch_row($result);
		    $bookname = $row[1];
		    $query ="SELECT * FROM books where name='$bookname'";
		    $result = mysqli_query($connection,$query);
		    if($result != false){
		    	$row = mysqli_fetch_row($result);
			echo "<div class='title'>$row[1]</div>";
			echo "<div class='coverdiv'><img id='cover' src='$row[4]' class='img-thumbnail' alt='Book Cover'></div>";
			echo "<ul type='none' class='details secondtitle'>
					<li style='font-size: 20px;'>Virsion: $row[2] </li>
					<li style='font-size: 20px;'>Course: $row[5]</li>
					<li style='font-size: 20px;'>Sellers:</li><br>
					<ul type='none'>";
					  do{
					  $owner = $row[3];
					  $userQ = "SELECT * FROM user where username ='$owner'";
					  $user = mysqli_query($connection,$userQ);
					  $user = mysqli_fetch_row($user);
					  $price = $row[7];
					  if ($price == null ||$price == 0 )
					      $price = "FREE!";
					  echo "<li> &nbsp&nbsp Contact Info:&nbsp&nbsp $user[2]<span>, &nbspPrice:&nbsp $price SR<li>";
					  }while($row = mysqli_fetch_row($result));

					echo"  </ul>

				</ul>

	</div>";
	}else{
	echo "<h3>".mysqli_error($connection)."</h3>";
	}
	}
	?>
			
		</section>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xm-12"></div>

		<footer>
			All rights reserved, 2017.

			<div id="date"></div>
			<script>
				document.getElementById("date").innerHTML = Date();
			</script>
		</footer>
		
		
	</div>
</body>
</html>
