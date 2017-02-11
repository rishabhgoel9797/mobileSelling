<!DOCTYPE html>
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
<a class="navbar-brand"href="home.html">E-Store</a>
</div>
<div>
<ul class="nav navbar-nav navbar-right">
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<li><a href="about us.html"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
<li><a href="contact us.html"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
</div>
</div>
</nav>
<div style="padding:20px">
<div class="container"style="padding-bottom:70px">
<div class="row">
<div class="col-md-6"><img src="http://www.techgadgets.in/img/lg-cookie-glide.jpg"></div>
<div class="col-md-6"><div style="padding-left:250px"><h2>SIGN UP</h2>
<form action="" method="get">
<input style="width:300px"type="text"name="yourname"placeholder="Name"required="true"/>
<br><br>
<form>
<input style="width:300px"type="email"name="email"placeholder="E-mail"required="true"/>
<br><br>
<form>
<input style="width:300px"type="password"name="yourpsd"placeholder="Password"required="true"/>
<br><br>
<form>
<input style="width:300px"type="number"name="quantity"min="0"max="9"placeholder="Contact"required="true"/>
<br><br>
<form>
<input style="width:300px"type="text"name="yourcity"placeholder="City"required="true">
<br><br>
<form>
<input style="width:300px"type="text"name="youraddress"placeholder="Address"required="true">
</form>
<br><br>
<div style="padding-left:250px"><input type="submit"value="submit"style="background-color:blue;color:white"/></div>
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
<td><a href="about us.html"style="color:white;">About Us</a></td>
<td><a href="#"style="color:white;">Login</a></td>
<td><a href="#"style="color:white;">+91-123-000000</a></td>
</tr>
<tr>
<td><a href="contact us.html"style="color:white;">Contact Us</a></td>
<td><a href="signup.html"style="color:white;">Sign Up</a></td>
</tr>
</table>
</div>
</div>
</nav>
<?php
echo "hi";
echo $_GET['yourname'];
?>
</body>
</html>
