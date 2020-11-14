<?php



include("includes/db.php");

?>
<html>
	<head>
		<title>Inserting Admin</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="insert_admin.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="800" height="450" border="2" bgcolor="silver">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Admin</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Admin Email:</b></td>
				<td><input type="text" name="email" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Password:</b></td>
				<td><input type="text" name="password" required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_admin" value="Insert Admin"/></td>
			</tr>
	<?php 

	if(isset($_POST['insert_admin'])){
	
		//getting the text data from the fields
		$email = $_POST['email'];
		$password= $_POST['password'];
	

	
		 $insert_user = "insert into admin (email,password) values ('$email','$password')";
		 
		 $insert_user = mysqli_query($con, $insert_user);
		 
		 if($insert_user){
		 
		 echo "<script>alert('Admin Has been inserted!')</script>";
		 echo "<script>window.open('index.php?','_self')</script>";
		 
		 }
	}








?>

