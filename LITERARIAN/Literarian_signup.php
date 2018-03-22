<?php session_start();
if (!isset($_SESSION["logged"])){
   $_SESSION["logged"] =false;
   $_SESSION["msg"] = "";
}
if ($_SESSION["logged"]==true)
	header('Location:http://localhost/v3/profile.php');
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="CSS/Signup.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://cryptojs.altervista.org/api/functions_cryptography.js"></script>  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Book exchanging website">
	<meta name="Keywords" content="book exchange, educational resources, education, prince sultan university, psu">
	<meta name="author" content="Nora Alshaalan, Norah Alsabti">
	<title>Lirerarian | Sign Up</title>
	
	<!-- COLORS:
		Gray: #505659
		LightBlue: #A7C3CE
		White: #F1F2F2
		Red: #B43A47
		-->
	
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

		<section>
			<div id="login">
				<div class="title"> 
						Sign Up
				</div>
				<br>
				<form action="newuser_info.php" id="signupform" name="signupform" method="post" onSubmit="return validate()" class="col-xm-12 col-md-12 col-lg-12">
			
					
						
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="username"  class="left secondtitle">
								Username: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="text" name="username" id="username" placeholder="username" class="field" required> <span id="error1" style="color:#B43A47; font-weight: bold;"> <?php if($_SESSION["msg"]!= null){echo $_SESSION["msg"]; $_SESSION["msg"]=null;}?> </span> </div> 
							
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="fname"  class="left secondtitle">
								Full Name: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="text" name="fname" id="fname" placeholder="Full Name" class="field" required> </div> 
					
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="email" class="left secondtitle">
									Email: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="email" name="email" id="email" class="field" placeholder="email" required> </div>
						
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="password"  class="left secondtitle">
									Password: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="password" name="password" id="password" class="field" placeholder="password" required> </div>
						
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="pconfirm"  class="left secondtitle">
									Confirm Password: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <input type="password" name="pconfirm" id="pconfirm" class="field" placeholder="confirm password" required>  <span id="error2" style="color:#B43A47; font-weight: bold;"> </span></div>
							
							<div class="col-xm-12 col-lg-3 col-md-4">
								<label for="uni" class="left secondtitle">
									University: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-9 col-md-8">
								<select size="1" name="uni" id="uni" class="field" placeholder="university">
									<?php
										$connection = mysqli_connect("localhost","root","","literarian");
										if(!$connection) die ("Unable to connect to database.");
										
										$query = "SELECT * FROM universities WHERE 1";
										$result = mysqli_query($connection,$query);
											while($row= mysqli_fetch_assoc($result)){
												echo "<option value='".$row['name']."'>".$row['name']."</option>";
											}
										
									?>
								</select>
							</div>
						
							<div class="col-xm-12 col-lg-3 col-md-4"></div>
							<div class="col-xm-12 col-lg-9 col-md-8"> <button type="submit" class="btn btn-default" name="submit1" >SIGN UP</button> </div>
							<input type="hidden" id ="hashed" name="hashed" value="">
						
				</form>
				
				<script>
	
					
					function validate(){
						result= true;
						var username = document.forms["signupform"]["username"].value;
						var pass1= document.forms["signupform"]["password"].value;
						var pass2= document.forms["signupform"]["pconfirm"].value;
						
						
						if (!usernameIsValid(username)) { //invalid name
				                var xhttp = new XMLHttpRequest();
								xhttp.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
									  document.getElementById("error1").innerHTML = this.responseText;
									}
								};
								xhttp.open("GET", "specialcharerror.txt", true);
								xhttp.send();
								result= false;
						}else{
							document.getElementById("error1").innerHTML= "";
						}
						
						if(pass1!=pass2){
				        	 var xhttp = new XMLHttpRequest();
								xhttp.onreadystatechange = function() {
									if (this.readyState == 4 && this.status == 200) {
									  document.getElementById("error2").innerHTML = this.responseText;
									}
								};
								xhttp.open("GET", "passmatcherror.txt", true);
								xhttp.send();
								result= false;
						}else{
							document.getElementById("error2").innerHTML= "";
						}
							var crypt = new Crypt();
							var digest_md5 = crypt.HASH.md5( document.forms["signupform"]["password"].value);
							document.signupform.hashed.value =  digest_md5;

						return result;
					}
					
					function usernameIsValid(username) {
						return /^[0-9a-zA-Z_.-]+$/.test(username);
					}
					
		
				</script>
				
				
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
