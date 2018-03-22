<?php

	ob_start();
	session_start();
	  if($_SESSION["logged"]!= true){
		    	header('Location: http://localhost/v3/Literarian_login.php');}

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
	<title>Lirerarian | Upload</title>
	
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
		#uploaddiv{
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
					<li><a href="Literarian_about.html">About Us</a></li>
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
		<section>
			<div id="uploaddiv">
				<div class="title"> 
						Upload Book
				</div>
				<br>
				<form action="uploadbook.php" id="uploadBook" name="uploadBook" method="post" onSubmit="return validate()" class="col-xm-12 col-md-12 col-lg-12">
			
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="bookname"  class="left secondtitle">
								Book Name: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="text" name="bookname" id="bookname" placeholder="Book Name" class="field" required></div> 
							
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="vesrion"  class="left secondtitle">
								Version: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="text" name="vesrion" id="vesrion" placeholder="1st" class="field" required> </div>
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="link"  class="left secondtitle">
								link of Img: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="text" name="link" id="link" placeholder="WWW.img.png" class="field" required> </div> 
						<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="price"  class="left secondtitle">
								Price: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="number" name="price" id="price" placeholder="0 for free" class="field" required> </div> 
					
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="course"  class="left secondtitle">
								Course:  
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> 
							<select size="1" name="course" id="course" placeholder="Course Name" class="field" required>
						
									<?php
										$connection = mysqli_connect("localhost","root","","literarian");
										if(!$connection) die ("Unable to connect to database.");
										$numOfResults=0;
										$query = "SELECT * FROM courses WHERE 1";
										$result = mysqli_query($connection,$query);
											while($row= mysqli_fetch_assoc($result)){
												echo "<option value=".$row['course'].">".$row['course']."</option>";
											}
										
									mysqli_close($conn);	?>
								</select>
								</div> 
						
							<div class="col-xm-12 col-lg-3 col-md-4"></div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <button type="submit" class="btn btn-default" name="submit1" >Upload</button> </div>
						
				</form>
				
			</div>
		</section>
			<?php

 			$host= "localhost";
			$user="root";
			$pass= "";
			$dbName="Literarian";
			$conn= mysqli_connect($host, $user, $pass, $dbName);
	
		if(!$conn) die("There was an error establishing connection.<br>". mysqli_errno());	
			if($_SERVER["REQUEST_METHOD"]=="POST"){
		
				$username= mysqli_real_escape_string($conn,$_POST['username']);
				$bookname= $_POST['bookname'];
				$vir= $_POST["vesrion"];
				$user= $_COOKIE["username"];
				$course =  $_POST["course"];
				echo "<h3> Here :".$course."</h3>";
				$link = $_POST['link'];
				$price = $_POST['price'];
				$uni =  $_COOKIE["uni"];
				$uni_id_q = "SELECT * FROM universities WHERE name='$uni'";
				$uni_id_get= mysqli_query($conn,$uni_id_q);
				$uni_row =  mysqli_fetch_row($uni_id_get);
				$uni_id =$uni_row[0];
			
				
				$insertquery="INSERT INTO books (name, version, owner,link, course,uni_id,price) VALUES ('$bookname', '$vir','$user','$link','$course','$uni_id','$price')";
				$result= mysqli_query($conn, $insertquery);
				echo "<h3>".mysqli_error($conn)."</h3>";
				if($result == false){
					$msg= "<label> *Something Went Wrong Please Try Again </label>";
					$_SESSION["msg"]= $msg;
					echo mysqli_error($conn);
				}
				
				$insertquery="SELECT id FROM books WHERE name='$bookname' AND version='$vir' AND owner='$user'";
				$result= mysqli_query($conn, $insertquery);
				$row= mysqli_fetch_row($result);
				$id = $row[0];
				$usernameCookie= $_COOKIE["username"];
				$sell = $_COOKIE["sell"];
				if($sell ==""){
				$sell = $id;
				setcookie("sell", $sell, time() + (86400 * 30), "/");
				}else{
				$sell = $_COOKIE["sell"].",".$id;
				setcookie("sell", $sell, time() + (86400 * 30), "/");
				}
	
				$select_query= "SELECT sell FROM user WHERE username ='$usernameCookie'";
				$sell_book= mysqli_query($conn,$select_query);
				$sell= mysqli_fetch_row($sell_book);
				echo "<h3> my sell". $sell."</h3>";
						echo "HERE WE ARE" .$sell[0].$id;
				if ($sell[0] == ""){
					echo "HERE WE ARE" .$sell[0];
					$sell_books ="".$id;
				}else{					
					$sell_books = $sell[0].",".$id;
				}
				$usernameCookie= $_COOKIE["username"];
				$update_query= "UPDATE user SET sell='$sell_books' WHERE username ='$usernameCookie'";
				$updated= mysqli_query($conn,$update_query);
				if($updated == false)
					echo mysqli_error($conn);
				$row = mysqli_fetch_row($result);
				$id=$row[0];
				header('Location: http://localhost/v3/profile.php'); 	
				
			}
			$_POST = array();
			mysqli_close($conn);


			?>	
			
		<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>

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
