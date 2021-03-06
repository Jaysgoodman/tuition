<?php

	include 'db.php';
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Class Schedule</title>

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
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:nth-child(odd){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}

</style>

<body>
    
<div class="header">
  <h1><a href="#default" >Labuan Tuition Centre</a></h1>
  <div class="header-right">
    <a href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
 
<h1>Class Schedule</h1>

<table id="customers">
  <tr>
    <th>Subject</th>
    <th>Date</th>
    <th>Time</th>
    <th>Classroom</th>
    <th>Enroll</th>
    
  </tr>
  

<?php
$query = "SELECT * FROM class_detail WHERE categoryID =1";
$result = mysqli_query($mysqli,$query);
$x=1;
while($row=mysqli_fetch_array($result)){
	
	$classID = $row['classID'];
	$subject_title = $row['subject_title'];
	$teacherID = $row['teacherID'];
	$categoryID = $row['categoryID'];
	$dateID = $row['dateID'];
	$timeID = $row['timeID'];
	$classroom_name = $row['classroom_name'];
?>

    <tr>
    <td><?php echo $subject_title;?></td>
    <td><?php echo $dateID;?></td>
    <td><?php echo $categoryID;?></td>
    <td><?php echo $classroom_name;?></td>
    <td><a href="addtocart.php?id=<?php echo $classID;?>" class="btn">Select</a></td>
  </tr>

<?php
$x++;
} //close here for looping
?>
</table>

</body>
</html>
