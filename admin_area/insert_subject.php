<!DOCTYPE>

<?php 

include("includes/db.php");

?>
<html>
	<head>
		<title>Inserting Subject</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="insert_subject.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Post Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Subject Title:</b></td>
				<td><input type="text" name="subject_title" size="60" required/></td>
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
				<select name="username" >
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
				<td><input type="text" name="classroom_name" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Price:</b></b></td>
				<td><input type="text" name="subject_price" size="60" required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Subject Now"/></td>
			</tr>
		
		</table>
	
	</form>

</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$subject_title = $_POST['subject_title'];
		$categoryID= $_POST['categoryID'];
		$username = $_POST['username'];
		$dateID = $_POST['dateID'];
		$timeID = $_POST['timeID'];
	    $classroom_name = $_POST['classroom_name'];
	    $subject_price = $_POST['subject_price'];
		
	
		 $insert_class_detail = "insert into class_detail (subject_title, username, categoryID, dateID, timeID, classroom_name, subject_price) values ('$subject_title', '$username', '$categoryID', '$dateID', '$timeID', '$classroom_name', '$subject_price')";
		 
		 $insert_pro = mysqli_query($con, $insert_class_detail);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Subject Has been inserted!')</script>";
		 echo "<script>window.open('index.php?insert_subject','_self')</script>";
		 
		 }
		 
		 else{
		echo "<script>alert('Subject added failed');</script>";
	}
	
	$_SESSION['id']= $id;
	}








?>



