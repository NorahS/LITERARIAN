<?php 
	ob_start();
	session_start();
        $host= "localhost";
	$user="root";
	$pass= "";
	$dbName="Literarian";
	$conn= mysqli_connect($host, $user, $pass, $dbName);
	
	if(!$conn) die("There was an error establishing connection.<br>". mysqli_errno());	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$username= mysqli_real_escape_string($conn,$_POST['username']);
		$name= $_POST['fname'];
		$email= $_POST['email'];
		$password= $_POST['hashed'];
		$university=$_POST['uni'];
		
		  $_SESSION["msg"]="";
		
		$insertquery="INSERT INTO user (username, name, email, password, university) VALUES ('$username', '$name','$email','$password', '$university')";
		

	
		
		$result= mysqli_query($conn, $insertquery);
		if($result == false){
				if( strpos(mysqli_error($conn), 'Duplicate entry') !== false) //check if username is taken
				    $msg = "*Username Is Taken Please Choose Another Username";
				else	    
				    $msg = "<label> *Something Went Wrong Please Try Again </label>";
		$_SESSION["msg"]= $msg;
	
		header('Location: http://localhost/v3/Literarian_signup.php');
		}else{

	
		 $_SESSION["logged"]=true;
	 	   $row = mysqli_fetch_row($result);
	 	     //setCookies
	  	      setcookie("username", $username, time() + (86400 * 30), "/");
	  	       setcookie("name", $name, time() + (86400 * 30), "/");
	  	        setcookie("email",$email , time() + (86400 * 30), "/");
	  		 setcookie("uni", $university, time() + (86400 * 30), "/");
	   		 setcookie("sell", "", time() + (86400 * 30), "/");  
	   		 setcookie("buy", "", time() + (86400 * 30), "/");

	  
		header('Location: http://localhost/v3/profile.php'); //Successfull siging up should be redirected to profie	
		}
	}

	mysqli_close($conn);

?>