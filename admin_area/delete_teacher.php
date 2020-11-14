<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_teacher'])){
	
	$delete_id = $_GET['delete_teacher'];
	
	$delete_cat = "delete from teacher where teacherID='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_cat); 
	
	if($run_delete){
	
	echo "<script>alert('A Teacher has been deleted!')</script>";
	echo "<script>window.open('index.php?view_teacher','_self')</script>";
	}
	
	}





?>