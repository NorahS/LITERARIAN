<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://cryptojs.altervista.org/api/functions_cryptography.js"></script> 
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Book exchanging website">
	<meta name="Keywords" content="book exchange, educational resources, education, prince sultan university, psu">
	<meta name="author" content="Nora Alshaalan, Norah Alsabti">
	<title>Lirerarian | Login</title>
	
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
		.container-fluid{
			width: 100%;
			padding: 0;
			margin-bottom: 40px;
		}
		.container{
			width:80%;
			margin: auto;
			overflow: hidden;
		}
		/*For any title*/
		.title{
			font-size: 20px;
			font-weight: bold ;
			text-transform: uppercase;
			letter-spacing: 8px; 
			padding: 5px 0px;
			color: #A7C3CE;
			border-bottom: 2px solid #B43A47;
		}
		.secondtitle{
			font-size: 17px;
			font-weight: bold ;
			text-transform: capitalize; 
			padding: 5px 0px;
			color: #505659;
		}
		/*For any text content*/
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
		.navbar-nav {
			width: 100%;
			text-align: center;
			margin: 0;
		  }
		.navbar-nav li {
			float: none;
			display: inline-block;
		  }
		.navbar #mainmenu {
			margin-top: 20px;
			text-align: center;
		}
		#mainmenu ul {
			display: inline-block;
			float: none;
			vertical-align: top;	
		}
		nav #mainmenu ul a{
			display: block;
			display: inline;
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
		#loginSec{
			width:70%;
			margin: auto;
			margin-top: 50px;
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
			width: 100%;
			border-radius: 8px;
		}
		.field:active{
			border: 0px;
			border: 1px solid #B43A47;
			border-radius: 8px;
		}
		#signup{
			font-size: 12px;
			text-align: center;
		}
		#signup a:link, a:active{
			text-decoration: none;
			color: #A7C3CE;
			font-weight: bolder;
		}
		#signup a:hover{
			color: #B43A47;
			
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
		.btn:focus{
			outline: none;
			border:none;
			border: 2px solid #A7C3CE;
			background-color: #A7C3CE;
			color: #F1F2F2;
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
					<li><a href="Literarian_contact.php">Contact Us</a></li>
					<li  class="current"><a href="Literarian_login.php">Login | Sign up</a></li>	
					</ul>
				</div>
			</div>
		</nav>
