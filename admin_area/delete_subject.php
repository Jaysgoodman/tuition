<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_subject'])){
	
	$delete_id = $_GET['delete_subject'];
	
	$delete_subject = "delete from class_detail where classID='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_subject); 
	
	if($run_delete){
	
	echo "<script>alert('A product has been deleted!')</script>";
	echo "<script>window.open('index.php?view_subject','_self')</script>";
	}
	
	}





?>