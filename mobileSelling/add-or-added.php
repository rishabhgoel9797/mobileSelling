<?php
session_start();
?>
<?php
function message($id)
{
require("connection.php");	
$query="select cart from items where id=$id";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
	if($row['cart']==0)
	{
		return "added to cart";
	}
	else
	{
		return "added!";
	}
}
}
?>