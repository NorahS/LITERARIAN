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
	<title>Lirerarian | Contact us</title>
	
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
		#contact{
			width:70%;
			margin: auto;
			margin-top: 150px;
		}
		
		.left{
			text-align: left;
		}
		.field{
			width: 40%;
			border: none;
			border:  1px solid #505659;
			border-radius: 8px;
			background-color: #F1F2F2;
			transition: width 2s ease-in-out ;
			margin: 10px 0px; 
			font-size: 15px;
			padding: 10px 10px;
		}
		.field:focus {
    		outline: none;
			border: 0;
			border: 1px solid #B43A47;
			border-radius: 8px;
			width: 100%;
		}
		.field:hover{
			border: 1px solid #A7C3CE;
			width: 50%;
			border-radius: 8px;
		}
		.field:active{
			border: 0px;
			border: 1px solid #B43A47;
			border-radius: 8px;
		}
		
		
		.btn{
			display: block;
			margin-bottom: 15px;
			width: 100px;
			border: 2px solid #A7C3CE;
			background-color: #A7C3CE;
			color: #F1F2F2;
			font-size: 15px;
			font-weight: bold;
		}
		.btn:hover{
			background-color:#F1F2F2;
			border: 2px solid #A7C3CE;
			color: #B43A47;
		}
		
		textarea{
			width: 40%;
			border: none;
			border:  1px solid #505659;
			border-radius: 8px;
			background-color: #F1F2F2;
			transition: width 2s ease-in-out ;
			margin: 10px 0px; 
			font-size: 15px;
			padding: 10px 10px;
		}
			textarea:focus {
    		outline: none;
			border: 0;
			border: 1px solid #B43A47;
			border-radius: 8px;
			width: 100%;
		}
		textarea:hover{
			border: 1px solid #A7C3CE;
			width: 50%;
			border-radius: 8px;
		}
		textarea:active{
			border: 0px;
			border: 1px solid #B43A47;
			border-radius: 8px;
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
					<li><a href="Literarian_books.php">Browse Books</a></li>
					<li><a href="Literarian_courses.php">Browse Courses</a></li>
					<li><a href="Literarian_uni.php">Browse Universities</a></li>
					<li><a href="Literarian_about.php">About Us</a></li>
					<li  class="current"><a href="Literarian_contact.php">Contact Us</a></li>
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

		<section>
			<div id="contact">
				<div class="title"> 
						Contact Us
					</div>
				<form action="mailto:214410489@psu.edu.sa" method="post" enctype="text/plain">
							<div class="col-xm-12 col-lg-2 col-md-2">
								<label for="name"  class="left secondtitle">
								Name: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-10 col-md-10"><input type="text" name="name" id="name" placeholder="Name" class="field" required></div>
						
							<div class="col-xm-12 col-lg-2 col-md-2">
								<label for="email"  class="left secondtitle">
									Email: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-10 col-md-10"><input type="email" name="email" id="email" class="field" placeholder="Email" required></div>
						
							<div class="col-xm-12 col-lg-2 col-md-2 left secondtitle" >Message: </div>
							<div class="col-xm-12 col-lg-10 col-md-10">
								<textarea name="message" id="message" rows="5" cols="46" placeholder="Please write your message here."></textarea>
							</div>
						
							<div class="col-xm-12 col-lg-2 col-md-2"></div>
							<div class="col-xm-12 col-lg-10 col-md-10"><button type="submit" class="btn btn-default">SUBMIT</button></div>
						

				</form>
			</div>
		</section>


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
