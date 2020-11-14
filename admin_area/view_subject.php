<?php 
if(!isset($_SESSION['email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All Subjects Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>No.</th>
		<th>Subject</th>
		<th>Category</th>
		<th>Teacher</th>
		<th>Date</th>
		<th>Time</th>
		<th>Classroom</th>
		<th>Price</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_pro = "select * from class_detail";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$classID = $row_pro['classID'];
		$subject_title = $row_pro['subject_title'];
		$categoryID = $row_pro['categoryID'];
		$username = $row_pro['username'];
		$dateID = $row_pro['dateID'];
		$timeID = $row_pro['timeID'];
		$classroom_name = $row_pro['classroom_name'];
		$subject_price = $row_pro['subject_price'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $subject_title;?></td>
		<td><?php echo $categoryID;?></td>
		<td><?php echo $username;?></td>
		<td><?php echo $dateID;?></td>
		<td><?php echo $timeID;?></td>
		<td><?php echo $classroom_name;?></td>
		<td><?php echo $subject_price;?></td>
		<td><a href="index.php?edit_subject=<?php echo $classID; ?>">Edit</a></td>
		<td><a href="delete_subject.php?delete_subject=<?php echo $classID;?>">Delete</a></td>
	
	</tr>
	<?php } 
?>
</table>
    <?php } 
?>