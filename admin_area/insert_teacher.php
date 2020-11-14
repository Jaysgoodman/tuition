<!DOCTYPE>

<?php 

include("includes/db.php");

?>
<html>
	<head>
		<title>Inserting Teacher</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="insert_teacher.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Teacher Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Username:</b></td>
				<td><input type="text" name="username" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Email:</b></td>
				<td><input type="text" name="email" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Password:</b></td>
				<td><input type="text" name="password" size="60" required/></td>
			</tr>
			
		
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Teacher Now"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$username = $_POST['username'];
		$email= $_POST['email'];
		$password = $_POST['password'];
	
		//getting the image from the field

		
	
	
		 $insert_teacher = "insert into teacher (username, email, password) values ('$username', '$email', '$password')";
		 
		 $insert_pro = mysqli_query($con, $insert_teacher);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Teacher Has been inserted!')</script>";
		 echo "<script>window.open('index.php?insert_teacher','_self')</script>";
		 
		 }
	}








?>