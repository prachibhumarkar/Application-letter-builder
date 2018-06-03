<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title> SIGN IN</title>
<link rel="stylesheet" href="style.css">
</head>
<body> 
	<script>
    function validate(){
		
		if(document.getElementById("uname").value=="")
		{   alert("Please enter username");
	        return false;
	    }
		
		if(document.getElementById("pwd").value=="")
		{
					alert("Enter Password");
					return false;
		}
		
		
	}
	</script>
<div class="title"><h1> SIGN IN </h1></div>
<div class= " container">
	<div class="left"></div>
	<div class="right">
<div class="formBox">
	<?php
   //getting data from user
   
    if(isset($_POST['submit']))
	 {
	    $username=$_POST['username'];
	    $password=$_POST['password'];
		//connect to database
		$con=mysqli_connect("localhost","root","Mylinux24","application");
		$res=mysqli_query($con,"select * from register where username='$username' and password='$password'");
		    if(mysqli_num_rows($res)==1)
			{
				$row=mysqli_fetch_assoc($res);
				$_SESSION['login']=$row['uid'];
				 header("location: home.php");
				
		     }
			else
			{
				echo"<p>Sorry Wrong Credentials</p>";
			}
	}
	?>
	
	
<form onsubmit="return validate()"action="login.php" method="POST" >
<p>Username</p>
<input type="text" name="username" id="uname" placeholder="Type Username">

<p>Password</p>
<input type="password" name="password" id="pwd"placeholder="Enter your password">
	
<p><input type="submit" name="submit" value="Sign In"></p>


</form>
	
</div>
</div>
</body>
</html>