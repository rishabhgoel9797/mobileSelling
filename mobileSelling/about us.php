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
  $_password=md5($_POST['_password']);
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
<div class="container"style="padding-bottom:40px">
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-body"><h3>Who We Are</h3><img src="http://estore.thelaminexgroup.com.au:8080/storefrontCommerce/images/reskin/eStorelogo.png"style="height:200px;width:200px;">
<div>E-store is an american electronic e-commerce company with headquarters in washington.It is the largest internet-based retailer
in the united states.E-store started as an online blog,but soon diversified,selling mobile phones.E-store also sells certain low-end
products like USB,cables and other accessories.E-store has separate retail websites for United States,United Kingdom and Ireland,
France,Canada,Germany,Italy,Spain,The Netherlands,Australia,Brazil,Japan,China,India and Mexico.</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-body"><h3>Our History</h3>
<div><div style="color:blue">1998-</div>The company was founded in 1998,spurred by what velos called his "Initiating Framework",which described his efforts
as an initiate to participate in the internet buisness boom during that time.In 1998,velos left his employment as president of
Ofcol & Co. and moved to Seattle.He began to work on a buisness plan for what would eventually become E-Store.
<br><br><div style="color:blue">2002-</div>In January 2002,E-store has received a funding of $12 million from venture partners and Indo-US venture partners.
<br><br><div style="color:blue">2008-</div>In July 2008,the company raised a further $45 million from bessemer venture partners,along with existing investors
venture partners and Indo-US venture partners.<br><br><div style="color:blue">2015-</div>E-Store received its third round of funding of $133 million on feb-2015.
The third round of funding was led by Fcom with all the currentinstitutional investors.</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-body"><h3>Opportunities<br><br></h3>
<div><h4>Available Roles</h4>
1.Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internship]
<br><br>2.Buisness Apprentice [6 Months Internship]
<br><br>3.Manager at backend operations [Full Time Role + also available as a 6 Months Internship]
</div>
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
<td><a href="form_signup.php.html"style="color:white;">Sign Up</a></td>
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
<button type="submit" name="login" class="btn btn-primary">login</button>
<br><br>
<p><a href="#">Forgot Password?</a></p>
</div>
</div>
</div>
</div>
<!-- End of modal -->
</body>
</html>
