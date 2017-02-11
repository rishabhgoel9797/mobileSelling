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
 $_email=mysqli_real_escape_string($conn,$_email);
 $_email=strip_tags($_email);
  $_password=md5($_POST['_password']);
  $_password=mysqli_real_escape_string($conn,$_password);
 $_password=strip_tags($_password);
  $regex="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(preg_match($regex,$_POST['_email']))
{
	echo "email is valid"."<br>";
}
else
{
	echo "email is not valid"."<br>";
}
  
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


<nav class="navbar navbar-default navbar-fixed-top">
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
<div style="padding:40px">
<div class="container"style="padding-top:40px;padding-bottom:40px">
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">mobile 1</div>
<div class="panel-body"><img src="mobile1.jpeg"style="padding-left:80px">
<div>2 GB RAM , 16 GB ROM , 5 inch display , 3500 mah battery , Rs 14000</div>
<div><button type="button" class="btn btn-primary" style="width:330px">Order Now!</button></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">mobile 2</div>
<div class="panel-body"><img src="mobile2.jpeg"style="padding-left:80px">
<div>3 GB RAM , 32 GB ROM , 5.5 inch display , 4050 mah battery, Rs 12000</div>
<div><button type="button" class="btn btn-primary" style="width:330px">Order Now!</button></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">mobile 3</div>
<div class="panel-body"><img src="mobile3.jpeg"style="padding-left:80px">
<div>3 GB RAM , 32 GB ROM , 5.5 inch display , 4050 mah battery, Rs 8000</div>
<div><button type="button" class="btn btn-primary" style="width:330px">Order Now!</button></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">mobile 4</div>
<div class="panel-body"><img src="mobile4.jpeg"style="padding-left:80px">
<div>3 GB RAM , 32 GB ROM , 5.5 inch display , 3500 mah battery, Rs 10000</div>
<div><button type="button" class="btn btn-primary" style="width:330px">Order Now!</button></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">mobile 5</div>
<div class="panel-body"><img src="mobile5.jpeg"style="padding-left:80px">
<div>4 GB RAM , 32 GB ROM , 5.5 inch display , 3500 mah battery, Rs 14000</div>
<div><button type="button" class="btn btn-primary" style="width:330px">Order Now!</button></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">mobile 6</div>
<div class="panel-body"><img src="mobile6.jpeg"style="padding-left:80px">
<div>4 GB RAM , 64 GB ROM , 5.5 inch display , 3075 mah battery, Rs 15000</div>
<div><button type="button" class="btn btn-primary" style="width:330px">Order Now!</button></div>
</div>
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
<form action=""method="post">
<input style="width:300px"type="email"name="_email"placeholder="Email"required="true"/>
<br><br>
<input style="width:300px"type="password"name="_password"placeholder="Password"required="true"/>
<br><br>
<button type="submit" name="login" class="btn btn-primary">login</button>
</form>
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
<input style="width:300px"type="email"name="_email"placeholder="Email"required="true"/>
<br><br>
<input style="width:300px"type="password"name="_password"placeholder="Password"required="true"/>
<br><br>
<button type="submit" name="login" class="btn btn-primary">login</button>
</form>
<br><br>
<p><a href="#">Forgot Password?</a></p>
</div>
</div>
</div>
</div>
<!-- End of modal -->

</body>
</html>
