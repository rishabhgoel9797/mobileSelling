<?php
session_start();
?>

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
<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
</div>
</div>
</nav>
<div style="padding-left:500px">
<table width="420"border="0">
<tr>
<td><h3>Change Password</h3>
<form action="" method="post">
<input style="width:500px"type="password"name="oldpsd"placeholder="Old Password"required="true"/>
<br><br>
<input style="width:500px"type="password"name="newpsd"placeholder="New Password"required="true"/>
<br><br>
<input style="width:500px"type="password"name="retypepsd"placeholder="Re-type New Password"required="true"/>
<br><br>
<div><button type="submit"class="btn btn-primary">Change</button></div>
</form>

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
echo "sahdjakshdkja";
if(isset($_SESSION['_email'] )&&isset($_POST['oldpsd'])) 
{  
echo "email and passwords match"."<br>";
echo "how are you"."<br>";

  $password1=md5($_POST['oldpsd']);
  
  $_password1=mysqli_real_escape_string($conn,$_password1);
 $_password1=strip_tags($_password1);
  $password2=md5($_POST['newpsd']);
  
  $_password2=mysqli_real_escape_string($conn,$_password2);
 $_password2=strip_tags($_password2);
  $password3=md5($_POST['retypepsd']);
  
  $_password3=mysqli_real_escape_string($conn,$_password3);
 $_password3=strip_tags($_password3);
    $check_user="select * from persons WHERE password='$password1'";  
  
    $result=mysqli_query($conn,$check_user);  
  
    if(mysqli_num_rows($result)>0)  
    {  
        if($password2==$password3)
		{
			
			$sql1 = "UPDATE persons SET password='$password3' where id='3'";
mysqli_query($conn, $sql1) or die ("Table was not updated: ".mysqli_error($conn));
		}
		else
	{
		echo " password and new password does not match";
	}
	
	}
	
	  
    } 

else
{
	echo "email and passwords do not match";
}	
     
?> 

</body>
</html>
