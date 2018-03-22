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
  	<link rel="stylesheet" href="/V3/CSS/Home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Book exchanging website">
	<meta name="Keywords" content="book exchange, educational resources, education, prince sultan university, psu">
	<meta name="author" content="Nora Alshaalan, Norah Alsabti">
	<title>Literarian | Home</title>
	
	<!-- COLORS:
		Gray: #505659
		LightBlue: #A7C3CE
		White: #F1F2F2
		Red: #B43A47
		-->
		<style>
			body {
				font-family: Open Sans;
			}

			.intro {
				background-color: #A7C3CE;
			}
			.intro h1 {
				text-align: center;
				text-transform: uppercase;
				font-size: 40px;
				letter-spacing: 60px;
				color: #F1F2F2;
			}
		</style>
		<script>
			$(document).ready(function(){
				
				$("#parallax div").hover(function(){
					$("#parallax div").fadeToggle("slow");
				});
				
			});
			
			
		</script>
	
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

	<div class="intro">
			<h1>Literarian</h1>
	</div>

		
		
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
					<li class="current"><a href="Literarian_home.php">Home</a></li> <!--CHANGE CURRENT -->
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
		

		<section id="parallax">
			<div class="container">
				<h1><i>“Knowledge, like air, is vital to life. Like air, no one should be denied </i>it.”</h1>
				<p></p>
				<p>-Alan Moore</p>
			</div>
		</section>

		<section id="recently_added">
			<div class='secondtitle tableTitle'>Recently-Added Books</div>
			<div class='scrollable'>
				<div class="insidescroll">
				<?php
				 $connection = mysqli_connect("localhost","root","","literarian");
				 if(!$connection) die ("Unable to connect to database.");
				$query = "SELECT * FROM books ORDER BY id DESC LIMIT 10";
				$books = mysqli_query($connection,$query);
				for ($i=0; $i<9; $i+=1){
				     $row = mysqli_fetch_row($books);
						 
					echo "<a href='bookpage.php?bid=$row[0]'><img class='preview' src='$row[4]' class='img-thumbnail' alt='Book Cover'></a>";
					}
					?>
				</div>
			</div>
		</section>
	</div>
	<footer>
		All rights reserved, 2017.
	
		<div id="date"></div>
		<script>
			document.getElementById("date").innerHTML = Date();
		</script>
	</footer>
	
	
			<script type="text/javascript">

			(function() {

				var windowH = $(window).height(),
					introEl = $('div.intro'),
					introHeadingH = introEl.find('h1').height();

				introEl.css('padding', (windowH - introHeadingH)/2 + 'px 0');

				$(document).on('scroll', function() {
					introEl.slideUp(1000, function() { $(document).off('scroll'); });
				});



			})();






		</script>
</body>
</html>
