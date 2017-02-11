
 

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
<div class="col-md-6"><img src="http://image.priceprice.k-img.com/global/images/product/mobilephones/Motorola_Droid_4_XT894/Motorola_Droid_4_XT894_L_1.jpg"></div>
<div class="col-md-6"><div style="padding-left:250px"><h2>SIGN UP</h2>
<form action="" method="post">
<input style="width:300px"type="text"name="_name"placeholder="Name"required="true"/>
<br><br>
<input style="width:300px"type="email"name="_email"placeholder="E-mail"required="true"/>
<br><br>
<input style="width:300px"type="password"name="_password"placeholder="Password"required="true"/>
<br><br>
<input style="width:300px"type="number"name="_quantity"placeholder="Contact"required="true"/>
<br><br>
<input style="width:300px"type="text"name="_city"placeholder="City"required="true"/>
<br><br>
<input style="width:300px"type="text"name="_address"placeholder="Address"required="true"/>
<br><br>
<div style="padding-left:230px"><input type="submit"value="submit" class="btn btn-primary"/></div>
</form>
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
<button type="submit" class="btn btn-primary">login</button>
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
<button type="submit" name="submit_form" class="btn btn-primary">login</button>
<br><br>
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
$name=$_POST['_name'];
$email=$_POST['_email'];
$_email=mysqli_real_escape_string($conn,$_email);
 $_email=strip_tags($_email);
$password=md5($_POST['_password']);

  $_password=mysqli_real_escape_string($conn,$_password);
 $_password=strip_tags($_password);
$quantity=$_POST['_quantity'];
$address=$_POST['_address'];
$city=$_POST['_city'];

$regex="/^[789][0-9]{9}$/";
if(preg_match($regex,$quantity))
{
	echo "phone number is valid"."<br>";
}
else
{
	echo "phone number is not valid"."<br>";
}


  $regex="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(preg_match($regex,$_POST['_email']))
{
	echo "email is valid"."<br>";
}
else
{
	echo "email is not valid"."<br>";
}

if(filter_var($email,FILTER_VALIDATE_EMAIL))
{echo "email is valid "."<br>";
if(isset($email))
{
	$checkdata="select email from persons where email='$email'";
	$query=mysqli_query($conn,$checkdata);
	if(mysqli_num_rows($query)>0)
	{
		echo "email exists , Please type another valid email adrress"."<br>";
	}
	else
	{
		$sql="INSERT INTO persons(name,email,password,contact,address,city) values('$name','$email','$password','$quantity','$address','$city')";

if(mysqli_query($conn,$sql))
{
	echo"<br>"."new record created successfully";
}
else
{
	echo "error".$sql."<br>".mysqli_error($conn);
}
	}
	}
}
else
{
	echo "email is not valid";
}






?>
</body>
</html>
