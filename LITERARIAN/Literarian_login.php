<?php
ob_start();
session_start();
if (!isset($_SESSION["logged"])){
   $_SESSION["logged"] =false;
   $_SESSION["msg"] = "";
}
if ($_SESSION["logged"]==true)
   header('Location:http://localhost/v3/profile.php');
include 'header.php';
?>


		<section>
			<div id="loginSec">
				<div class="title"> 
						Login
					</div>
				<form name="loginForm" id="loginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']?>" onSubmit="return validate()">
				<!-- PLEASE VALIDATE USERNAME AND PASSWORD FROM DATABASE--> <!-- DONE !-->
					
							<div class="col-xm-12 col-lg-2 col-md-2">
								<label for="username"  class="left secondtitle">
								Username: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-10 col-md-10"><input type="text" name="username" id="username" placeholder="username" class="field" required> <span id ="error" style="color:#B43A47; font-weight: bold;"> </span></div>
						
							<div class="col-xm-12 col-lg-2 col-md-2">
								<label for="password"  class="left secondtitle">
									Password: 
								</label>
							</div>
							<div class="col-xm-12 col-lg-10 col-md-10"><input type="password" name="password" id="password" class="field" placeholder="password" required> </div>
						
							<div class="col-xm-12 col-lg-2 col-md-2"></div>	
							<div class="col-xm-12 col-lg-10 col-md-10"><button type="submit" id="login"  name="login" class="btn btn-default">LOGIN</button><span style="color:#B43A47; font-weight: bold;"><?php if(isset($_SESSION["msg"]) && $_SESSION["msg"]!=null){ echo $_SESSION["msg"]; $_SESSION["msg"]=null;}?>  </span></div>	<input type="hidden" id ="hashed" name="hashed" value="">
					
						<hr width="50%" style="border-bottom: 1px solid #505659">
					<p id="signup" class="secondtitle">New here? <a href="Literarian_signup.php">Sign Up!</a></p>
				</form>
					<script>
					
					function validate(){
						result= true;
						var username = document.forms["loginForm"]["username"].value;
						
						
					if (!usernameIsValid(username)) {
					   
					    var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
							  document.getElementById("error").innerHTML = this.responseText;
						    }
						};
						xhttp.open("GET", "specialcharerror.txt", true);
						xhttp.send();
						result= false;
					}

							var crypt = new Crypt();
							var digest_md5 = crypt.HASH.md5( document.forms["loginForm"]["password"].value);
							document.loginForm.hashed.value =  digest_md5;
					
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
		<?php

	  if($_SERVER['REQUEST_METHOD'] == "POST"){
	  
	  //form data
	  $name = $_POST["username"];
	  $password = $_POST["hashed"];
	
	  //database info
	  $host="localhost";
	  $user="root";
	  $pass ="";
	  $db="literarian";
	  
	   $_SESSION["msg"]="";
	  
	  $connection = mysqli_connect($host,$user,$pass,$db);

	  if(!$connection){
	  //print msg
	  echo "something went wrong";
	  }else{
	  $query = "SELECT * FROM user WHERE username='$name' AND password='$password' ";
	  $result = mysqli_query($connection,$query);
	  if(mysqli_num_rows($result)==0){
	  //username or password are wrong
	  $_SESSION["msg"] ="Password Or Username Are Wrong!";
	   
	  header("Refresh:0");
	  //header('Location: http://localhost/project/Literarian/Literarian_login.php');
	  }else{
	  //upon successful login the user should be redirected to a profile page
	   $_SESSION["logged"]=true;
	   $row = mysqli_fetch_row($result);
	   //setCookies
	   setcookie("username", $row[0], time() + (86400 * 30), "/");
	   setcookie("name", $row[1], time() + (86400 * 30), "/");
	   setcookie("email", $row[2], time() + (86400 * 30), "/");
	   setcookie("uni", $row[4], time() + (86400 * 30), "/");
	   setcookie("sell", $row[5], time() + (86400 * 30), "/");  
	   setcookie("buy", $row[6], time() + (86400 * 30), "/");

	  header('Location:http://localhost/v3/profile.php');
	  }
	  }

	  }

	  ?>

	
</body>
</html>
