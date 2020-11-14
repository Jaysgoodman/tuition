
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All Parents Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Active</th>
		<th>Account Created</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_c = "select * from parent";
	
	$run_c = mysqli_query($con, $get_c); 
	
	$i = 0;
	
	while ($row_c=mysqli_fetch_array($run_c)){
		
		$id = $row_c['id'];
		$first_name = $row_c['first_name'];
		$email = $row_c['email'];
		$active = $row_c['active'];
	    $created_date = $row_c['created_date'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $first_name;?></td>
		<td><?php echo $email;?></td>
		<td><?php echo $active;?></td>
        <td><?php echo $created_date;?></td>
		<td><a href="delete_c.php?delete_c=<?php echo $id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>




</table>