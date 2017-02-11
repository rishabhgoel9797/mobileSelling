<?
session_start();
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
<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
</div>
</div>
</nav>

<form action="" method="post">

<div style="padding:40px">
<div class="container"style="padding-top:40px;padding-bottom:40px">
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">#1</div>
<div class="panel-body"><img src="mobile1.jpeg"style="padding-left:80px">
<div>2 GB RAM , 16 GB ROM , 5 inch display , 3500 mah battery, Rs 14000</div>
<div><button type="button" class="btn btn-primary" style="width:330px"><a href="cart.php?id=1&add=add"name="add" style="color:white">
<?php
require_once("add-or-added.php");
echo message(1);
?>Add to cart</a></button>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">#2</div>
<div class="panel-body"><img src="mobile2.jpeg"style="padding-left:80px">
<div>3 GB RAM , 32 GB ROM , 5.5 inch display , 4050 mah battery, Rs 12000</div>
<div><button type="button" class="btn btn-primary btn-block" style="width:330px"><a href="cart.php?id=2&add=add"name="add" style="color:white">
<?php
require_once("add-or-added.php");
echo message(2);
?>Add to cart</a></button></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">#3</div>
<div class="panel-body"><img src="mobile3.jpeg"style="padding-left:80px">
<div>3 GB RAM , 32 GB ROM , 5.5 inch display , 4050 mah battery, Rs 8000</div>
<div><button type="button" class="btn btn-primary" style="width:330px"><a href="cart.php?id=3&add=add"name="add" style="color:white">
<?php
require_once("add-or-added.php");
echo message(3);
?>Add to cart</a></button></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">#4</div>
<div class="panel-body"><img src="mobile4.jpeg"style="padding-left:80px">
<div>3 GB RAM , 32 GB ROM , 5.5 inch display , 3500 mah battery, Rs 10000</div>
<div><button type="button" class="btn btn-primary" style="width:330px"><a href="cart.php?id=4&add=add"name="add" style="color:white">
<?php
require_once("add-or-added.php");
echo message(4);
?>Add to cart</a></button></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">#5</div>
<div class="panel-body"><img src="mobile5.jpeg"style="padding-left:80px">
<div>4 GB RAM , 32 GB ROM , 5.5 inch display , 3500 mah battery, Rs 14000</div>
<div><button type="button" class="btn btn-primary" style="width:330px"><a href="cart.php?id=5&add=add"name="add" style="color:white">
<?php
require_once("add-or-added.php");
echo message(5);
?>Add to cart</a></button></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">#6</div>
<div class="panel-body"><img src="mobile6.jpeg"style="padding-left:80px">
<div>4 GB RAM , 64 GB ROM , 5.5 inch display , 3075 mah battery, Rs 15000</div>
<div><button type="button" class="btn btn-primary" style="width:330px"><a href="cart.php?id=6&add=add"name="add" style="color:white">
<?php
require_once("add-or-added.php");
echo message(6);
?>Add to cart</a></button></div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>

</body>
</html>
