<?php
                                   //getting data from user
   
                                   if(isset($_POST['login']))
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
				                         header("location:home.php");
								
				
		                               }
			                         else
			                          {   header("location:index1.php");
				                       
			                           }
	                                 }
	                                 ?>