<!DOCTYPE>

<?php 

include("includes/db.php");

if(isset($_GET['edit_teacher'])){

	$get_id = $_GET['edit_teacher']; 
	
	$get_pro = "select * from teacher where teacherID='$get_id'";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_pro=mysqli_fetch_array($run_pro);

        
        
		$teacher_id = $row_pro['teacherID'];
		$username = $row_pro['username'];
		$email = $row_pro['email'];
		$password = $row_pro['password'];
		
		
		$get_cat = "select * from teacher where cat_id='$pro_cat'";
		
		$run_cat=mysqli_query($con, $get_cat); 
		
		$row_cat=mysqli_fetch_array($run_cat); 
		
		$category_title = $row_cat['cat_title'];
		
		$get_brand = "select * from brands where brand_id='$pro_brand'";
		
		$run_brand=mysqli_query($con, $get_brand); 
		
		$row_brand=mysqli_fetch_array($run_brand); 
		
		$brand_title = $row_brand['brand_title'];
}
?>
<html>
	<head>
		<title>Update Teacher</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Edit & Update Teacher</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Username:</b></td>
				<td><input type="text" name="username" size="60" value="<?php echo $username;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Email:</b></td>
				<td><input type="text" name="email" size="60" value="<?php echo $email;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Password:</b></td>
				<td><input type="text" name="password" size="60" value="<?php echo $password;?>"/></td>
			</tr>
			
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_teacher" value="Update Teacher"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['update_teacher'])){
	
		//getting the text data from the fields
		
		$update_id = $teacher_id;
		
		$username = $_POST['username'];
		$email= $_POST['email'];
		$password = $_POST['password'];
	
		//getting the image from the field
	
		 $update_teacher = "update teacher set username='$username', email='$email',password='$password' where teacherID='$update_id'";
		 
		 $run_subject = mysqli_query($con, $update_teacher);
		 
		 if($run_subject){
		 
		 echo "<script>alert('Subject has been updated!')</script>";
		 
		 echo "<script>window.open('index.php?view_teacher','_self')</script>";
		 
		 }
	}
?>