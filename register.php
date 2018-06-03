<html>
<head>
<meta charset="utf-8">
<title> Login Form </title>
<link rel="stylesheet" href="style.css">
</head>
<body> 
	<script>
    function validate(){
		
		if(document.getElementById("uname").value=="")
		{   alert("Please enter username");
	        return false;
	    }
		if(document.getElementById("email").value=="")
		{
			alert("Please enter email id");
			return false;
		}
		if(document.getElementById("pwd").value=="")
		{
					alert("Enter Password");
					return false;
		}
		
		
	}
	</script>
<div class="title"><h1> SIGN UP FORM </h1></div>
<div class= " container">
	<div class="left"></div>
	<div class="right">
<div class="formBox">

	<?php
	//getting input from user
	 if(isset($_POST['submit']))
	{
	 $name=$_POST['username'];
	 $password=$_POST['password'];
	 $email=$_POST['email'];
	 //connect to database 
	 $con=mysqli_connect("localhost","root","Mylinux24","application")or die('fail');
	 //insert the data into database
      mysqli_query($con,"INSERT INTO register (uid,username,email,password)VALUES (NULL,'$name','$email','$password')");
		if(mysqli_affected_rows($con)==1)
        { 

		   echo"REGISTERED SUCCESSFULLY";
	    }
	    else
		{
		 echo"<p>SORRY!UNABLE TO REGISTER</p>";
		 echo mysqli_error($con);
	    }
	}
?>
	
<form onsubmit="return validate()"action="register.php" method="POST" >
<p>Username</p>
<input type="text" name="username" id="uname" placeholder="Type Username">
<p>Email_id</p>
<input type="email" name="email" id="email" placeholder="example@.com">
<p>Password</p>
<input type="password" name="password" id="pwd"placeholder="Create your password">
<input type="submit" name="submit" value="Sign Up">
<p class="message">Already registered? <a href="login.php">Sign in</a></p>

</form>
	
</div>
</div>
</body>
</html>