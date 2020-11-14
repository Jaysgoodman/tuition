
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All Teachers Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>No.</th>
		<th>Username</th>
		<th>Email</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_cat = "select * from teacher";
	
	$run_cat = mysqli_query($con, $get_cat); 
	
	$i = 0;
	
	while ($row_cat=mysqli_fetch_array($run_cat)){
		
		$teacherID = $row_cat['teacherID'];
		$username = $row_cat['username'];
		$email = $row_cat['email'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $username;?></td>
		<td><?php echo $email;?></td>
		<td><a href="index.php?edit_teacher=<?php echo $teacherID; ?>">Edit</a></td>
		<td><a href="delete_teacher.php?delete_teacher=<?php echo $teacherID;?>">Delete</a></td>
	
	</tr>
	<?php } ?>




</table>