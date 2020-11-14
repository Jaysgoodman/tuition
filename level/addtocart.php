<?php
require 'db.php';

$classID = $_GET['id']; //get id
$cartID = $_SESSION['cartID'];

$query1 = "SELECT * FROM cartitems WHERE cartID='$cartID' AND classID='$classID'";
$result1 = mysqli_query($mysqli,$query1);

if(mysqli_num_rows($result1)>0){ //if subject already in cart
	
	echo"<script>alert('Class already selected!');
		window.location='viewcart.php';</script>";
}
else{ //if class not in cart
	$query = "INSERT INTO cartitems (cartID,classID,quantity) VALUES ('$cartID','$classID', '1')";
	$result = mysqli_query($mysqli,$query); 
	
	if($result){
	echo"<script>alert('Class has been selected!');
		window.location='viewcart.php';</script>";
		 
}
}

?>