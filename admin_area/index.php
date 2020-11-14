<?php 
session_start(); 
	include("includes/db.php"); 

if(!isset($_SESSION['email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<!DOCTYPE> 

<html>
	<head>
		<title>This is Admin Panel</title> 
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>


<body> 

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
		<div id="right">
		<h2 style="text-align:center;">Manage Content</h2>
			
			<a href="index.php?insert_subject">Insert New Subject</a>
			<a href="index.php?view_subject">View All Subjects</a>
			<a href="index.php?insert_teacher">Insert New Teacher</a>
			<a href="index.php?view_teacher">View All Teachers</a>
			<a href="index.php?view_customers">View Customers</a>
			<a href="index.php?insert_admin">Insert New Admin</a>
			<a href="index.php?view_payments">View Payments</a>
			<?php //<a href="index.php?insert_brand">Insert New Brand</a>
			//<a href="index.php?view_brands">View All Brands</a>
			//<a href="index.php?view_orders">View Orders</a>
			//<a href="index.php?view_payments">View Payments</a>?>
			<a href="logout.php">Admin Logout</a> 
		
		</div>
		
		<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php 
		if(isset($_GET['insert_subject'])){
		
		include("insert_subject.php"); 
		
		}
		if(isset($_GET['view_subject'])){
		
		include("view_subject.php"); 
		
		}
		if(isset($_GET['edit_subject'])){
		
		include("edit_subject.php"); 
		
		}
		if(isset($_GET['insert_teacher'])){
		
		include("insert_teacher.php"); 
		
		}
		
		if(isset($_GET['view_teacher'])){
		
		include("view_teacher.php"); 
		
		}
		
		if(isset($_GET['edit_teacher'])){
		
		include("edit_teacher.php"); 
		
		}
		
		if(isset($_GET['view_customers'])){
		
		include("view_customers.php"); 
		
		}
		
		if(isset($_GET['insert_admin'])){
		
		include("insert_admin.php"); 
		
		}
		
		if(isset($_GET['insert_brand'])){
		
		include("insert_brand.php"); 
		
		}
		
		if(isset($_GET['view_brands'])){
		
		include("view_brands.php"); 
		
		}
		if(isset($_GET['edit_brand'])){
		
		include("edit_brand.php"); 
		
		}
		
		if(isset($_GET['view_orders'])){
		
		include("view_orders.php"); 
		
		}
		
		if(isset($_GET['view_payments'])){
		
		include("view_payments.php"); 
		
		}
		
		
		?>
		</div>






	</div>


</body>
</html>

<?php } ?>