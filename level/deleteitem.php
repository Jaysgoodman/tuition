<?php
require 'db.php';
$classID = $_GET['id']; //get id
$cartID = $_SESSION['cartID'];

$query = "DELETE FROM cartitems WHERE classID='$classID' AND cartID='$cartID'";
$result = mysqli_query($mysqli,$query);

if($result){
	echo"<script>alert('Subject has been deleted!');
		window.location='viewcart.php';</script>";
	
	
}



?>