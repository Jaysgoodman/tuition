<!DOCTYPE>

<?php 

include("includes/db.php");

if(isset($_GET['edit_subject'])){

	$get_id = $_GET['edit_subject']; 
	
	$get_pro = "select * from class_detail where classID='$get_id'";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_pro=mysqli_fetch_array($run_pro);
		
		$subject_id = $row_pro['classID'];
		$subject_title = $row_pro['subject_title'];
		$categoryID = $row_pro['categoryID'];
		$teacherID = $row_pro['teacherID'];
		$dateID = $row_pro['dateID'];
		$timeID = $row_pro['timeID'];
		$classroom_name = $row_pro['classroom_name'];
		
		$get_cat = "select * from class_detail where cat_id='$pro_cat'";
		
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
		<title>Update Subject</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Edit & Update Product</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Subject Title:</b></td>
				<td><input type="text" name="subject_title" size="60" value="<?php echo $subject_title;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Subject Category:</b></td>
				<td>
				<select name="categoryID" >
					<option>Select a Category</option>
					<?php 
		$get_cats = "select * from category";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['categoryID']; 
		$cat_title = $row_cats['name'];
	
		echo "<option value='$cat_id'>$cat_title</option>";
	}
					?>
				</select>
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Teacher:</b></td>
				<td>
				<select name="teacherID" >
					<option>Select Teacher</option>
					<?php 
		$get_teacher = "select * from teacher";
	
	$run_teacher = mysqli_query($con, $get_teacher);
	
	while ($row_teacher=mysqli_fetch_array($run_teacher)){
	
		$teacher_ID = $row_teacher['teacherID']; 
		$user_name = $row_teacher['username'];
	
	echo "<option value='$teacher_ID'>$user_name</option>";
	}
					?>
				</select>
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Subject Date:</b></td>
				<td>
				<select name="dateID" >
					<option>Select a Date</option>
					<?php 
		$get_cats = "select * from subject_date";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$dateID = $row_cats['dateID']; 
		$date = $row_cats['date'];
	
		echo "<option value='$dateID'>$date</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Subject Time:</b></td>
				<td>
				<select name="timeID" >
					<option>Select a Time</option>
					<?php 
		$get_cats = "select * from subject_time";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$timeID = $row_cats['timeID']; 
		$time = $row_cats['time'];
	
		echo "<option value='$timeID'>$time</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
            <tr>
				<td align="right"><b>Classroom:</b></td>
				<td><input type="text" name="classroom_name" size="60" value="<?php echo $classroom_name;?>"/></td>
			</tr>

			
		
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_subject" value="Update Subject"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['update_subject'])){
	
		//getting the text data from the fields
		
		$update_id = $subject_id;
		
		$subject_title = $_POST['subject_title'];
		$categoryID= $_POST['categoryID'];
		$teacherID = $_POST['teacherID'];
		$dateID = $_POST['dateID'];
		$timeID = $_POST['timeID'];
		$classroom_name = $_POST['classroom_name'];
	
		//getting the image from the field
	
		 $update_subject = "update class_detail set subject_title='$subject_title',teacherID='$teacherID',categoryID='$categoryID',dateID='$dateID',timeID='$timeID',classroom_name='$classroom_name' where classID='$update_id'";
		 
		 $run_subject = mysqli_query($con, $update_subject);
		 
		 if($run_subject){
		 
		 echo "<script>alert('Subject has been updated!')</script>";
		 
		 echo "<script>window.open('index.php?view_subject','_self')</script>";
		 
		 }
	}








?>












