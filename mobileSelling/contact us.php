<?php
$host="localhost";
$user="root";
$password="";
$db="database";
$conn=mysqli_connect($host,$user,$password,$db);
if(!$conn)
{
	die("Connection failed :".mysqli_connect_error());
}
session_start();

if(isset($_POST['_email'])&&isset($_POST['_password']) ) 
{  
 $_email=$_POST['_email'];
  $_password=$_POST['_password'];
    $check_user="select * from persons WHERE email='$_email' AND password='$_password'";  
  
    $result=mysqli_query($conn,$check_user);  
  
    if(mysqli_num_rows($result)>0)  
    {  
        $_SESSION["_email"]=$_POST["_email"];
        echo "<script>alert('logged in correctly')</script>"; 
		header('location:home1.php');
	
	}
	    else  
    {        echo "<script>alert('Email or password is incorrect!')</script>";  
 	 header('location:form_signup.php');
    }  
    }  
     
?> 


 
<html lang="en">
<head>
<title>e-commerce website</title>
<meta charset="utf-8">
<meta name="viewport"content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand"href="index1.php">E-Store</a>
</div>
<div>
<ul class="nav navbar-nav navbar-right">
<li><a href="form_signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
<li><!-- Trigger the modal with a button -->
<a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
<li><a href="about us.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
<li><a href="contact us.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
</div>
</div>
</nav>
<div style="padding:20px">
<div class="container"style="padding-bottom:70px">
<div class="row">
<div class="col-md-6"><div style="font-weight:bold;font-size:20px">LIVE SUPPORT<br></div>
<div style="font-size:18px">24 hours | 7 days a week | 365 days a year live technical support</div>
<div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at a layout.
The point of using Lorem Ipsem is that it has a more-or-less normal distribution of letters .There are many variations of passages
of Lorem Ipsum available ,but the majority have suffered alteration in some form,by injected humour,or randomised words
which dont look slightly believable.If you are going to use a passage of Lorem Ipsum,you need to be sure there isn't anything 
embarrassing hidden in the middle of text.</div></div>
<div class="col-md-6"><div style="padding-left:200px"><img src="http://us.123rf.com/450wm/kebox/kebox1205/kebox120500281/13910202-glossy-black-button--live-support.jpg"style="width:200px;height:200px"></div>
</div>
</div>
<div class="row">
<div class="col-md-6"><div style="font-weight:bold;font-size:20px;padding-top:50px">CONTACT US</div>
<form action=""method="post">
<div style="font-size:15px;font-weight:bold">Name</div>
<input style="width:500px"type="text"name="yourname"required="true"/>
<br><br>
<div style="font-size:15px;font-weight:bold">E-mail</div>
<input style="width:500px"type="email"name="yourmail"required="true"/>
<br><br>
<div style="font-size:15px;font-weight:bold">Message</div>
<input style="height:100px;width:500px"type="message-box"name="yourmessage"/>
<br><br>
<div><button type="submit" value="submit" class="btn btn-primary">Submit</button></div>
</form>
</div>
<div class="col-md-6"><div style="padding-left:200px"><h3>Contact Information:</h3>
500 Lorem Ipsum Dolor Sit,<br>
22-56-2-6 Sit Amet,Lorem,<br>
USA<br>
Phone:(00)222 666 444<br>
Fax:(000)000 00 00 0<br>
E-mail:info@mycompany.com<br>
Follow on:Facebook,Twitter
</div>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
<div class="container-fluid">
<div style="padding-left:100px;background-color:#454545;color:white;">
<table width="1500"border="0">
<tr>
<td style="font-weight:bold">Information</td>
<td style="font-weight:bold">My Account</td>
<td style="font-weight:bold">Contact Us</td>
</tr>
<tr>
<td><a href="about us.php"style="color:white;">About Us</a></td>
<td>
<!-- Trigger the modal with a button -->
<a style="color:white"data-toggle="modal" href="#myModal">login</a>
</td>
<td><a href="#"style="color:white;">+91-123-000000</a></td>
</tr>
<tr>
<td><a href="contact us.php"style="color:white;">Contact Us</a></td>
<td><a href="form_signup.php"style="color:white;">Sign Up</a></td>
</tr>
</table>
</div>
</div>
</nav>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h4 class="modal-title">login</h4>
</div>
<div class="modal-body">
<p>Don't have an account?<a href="#">Register</p>
<form>
<input style="width:300px"type="email"name="username"placeholder="Email"required="true"/>
<br><br>
<input style="width:300px"type="password"name="password"placeholder="Password"required="true"/>
<br><br>
<button type="submit" name="login" class="btn btn-primary">login</button>
<br><br>
<p><a href="#">Forgot Password?</a></p>
</div>
</div>
</div>
</div>
<!-- End of modal -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h4 class="modal-title">login</h4>
</div>
<div class="modal-body">
<p>Don't have an account?<a href="#">Register</p>
<form action=""method="post">
<input style="width:300px"type="email"name="username"placeholder="Email"required="true"/>
<br><br>
<input style="width:300px"type="password"name="password"placeholder="Password"required="true"/>
<br><br>
<button type="submit" name="login" name="login" class="btn btn-primary" value="log-in">login</button>
<br><br>
</form>
<p><a href="#">Forgot Password?</a></p>
</div>
</div>
</div>
</div>
<!-- End of modal -->


<?php
$host="localhost";
$user="root";
$password="";
$db="database";
$conn=mysqli_connect($host,$user,$password,$db);
if(!$conn)
{
	die("Connection failed :".mysqli_connect_error());
}
$name=$_POST['yourname'];
$email=$_POST['yourmail'];
$message=$_POST['yourmessage'];

  $regex="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(preg_match($regex,$_POST['_email']))
{
	echo "email is valid"."<br>";
}
else
{
	echo "email is not valid"."<br>";
}

$sql="INSERT INTO contact(name,email,message) values('$name','$email','$message')";
if(mysqli_query($conn,$sql))
{
	echo"<br>"."new record created successfully";
}
else
{
	echo "error".$sql."<br>".mysqli_error($conn);
}
?>
</body>
</html>
