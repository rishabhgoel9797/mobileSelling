<?
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
<table width="400"border="3">
<tr>
<td style="font-weight:bold">Item Number</td>
<td style="font-weight:bold">Price</td>

</tr>
</table>
</div>
<hr width="50%"></body>
</html>