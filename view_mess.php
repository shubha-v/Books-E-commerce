<?php
session_start();
$title="booksimg/icon.jpg";
include("database_functions.php");
$conn = db_connect();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("inc/header.php");?>
	</head>
	<body>
	<br><br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-9" >
			<h3><i class="fa fa-envelope"></i> Message     <a href="admin_mess_del.php?id=<?php echo $_GET['id']; ?>" class="btn-sm pull-right">Delete Message</a></h3>  	  <hr>  
	<?php 
				$sql="UPDATE message SET status=0 WHERE id=$_GET[id]";
				$result=$conn->query($sql);
				$sql="SELECT * FROM message WHERE id=$_GET[id]";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
					if($row=$result->fetch_assoc())
					{
						echo "<h4>".$row['name']." <small>".$row['email']."</small></h4>";
						echo "<p>".$row['message']."</p>";
						echo"<p class='text-info pull-right'>Message Received at ".$row['logs']."</p>";
						
					}
				}
			?>
		
		</div>
	</div>
</div>
	</body>
</html>