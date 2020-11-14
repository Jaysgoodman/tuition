<?php

	include 'db.php';
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>View Cart</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="" />

<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-2.1.4.min.js"></script>

<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: black;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
  .block {
    display: block;
    width: 100%;
    border: none;
    background-color: #FF0000;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}
.block:hover {
    background-color: #ddd;
    color: black;
}
}

table{
		font-family: arial,sans-serif;
		border-collapse: collapse;
		width: 100%;
}
td,th{
		border: 1px solid #000000;
		text-align:center;
		padding:8px;
}
th{
		padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
td{
		background-color:#dddddd;
}
</style>
</head>

<body>
    
<div class="header">
  <h1><a href="#default" >Labuan Tuition Centre</a></h1>
  <div class="header-right">
    <a href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
    
<h1>View Cart</h1>
<br/>

<table>
<tr>
<th>No.</th>
<th>Subject</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
<th>Action</th>
</tr>

<?php
$cartID = $_SESSION['cartID'];
$query = "SELECT *,(p.subject_price*ci.quantity) AS totalPrice
 FROM cartitems ci JOIN class_detail p ON p.classID=ci.classID WHERE ci.cartID='$cartID'";
$result = mysqli_query($mysqli,$query);
$x=1;
$sumPrice = 0;
while($row=mysqli_fetch_array($result)){
	$classID = $row['classID'];
	$subject_title = $row['subject_title'];
	$subject_price = $row['subject_price'];
	$dateID = $row['dateID'];
	$timeID = $row['timeID'];
	$quantity = $row['quantity'];
	$subtotal = $row['totalPrice'];
	$sumPrice += $subtotal;

?>
<tr>
<td><?php echo $x;?></td>
<td><?php echo $subject_title;?></td>

<td><?php echo $dateID;?></td>
<td><?php echo $timeID;?></td>
<td><?php echo $subtotal;?></td>
<td> 
<a href="deleteitem.php?id=<?php echo $classID;?>"> Delete</a> <br/>
<a href="index.php"> Back</a>
</td>



</tr>
<?php
$x++;
} //close here for looping
?>
</table>
<center><h1>TOTAL: RM <?php echo $sumPrice;?></h1></center>
<center><button type="button" class= "block" class="block"><a href="payment.php?totalprice=<?php echo $sumPrice;?>"><h1>Payment</h1></button></a></center>


</body>
</html>