<?php
$title="booksimg/icon.jpg";
session_start();
include("database_functions.php");
$conn = db_connect();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("inc/header.php");?>
			<link rel="shortcut icon" href="image/icon.jpg" />
        <title>Books Store</title>
	</head>
	<body>
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-9" >   
			
<?php 
$sql="SELECT * FROM message ORDER BY id DESC";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo '<ul class="list-group">';
		while($row=$result->fetch_assoc())
		{
			if($row['status']=='1')
			{
				echo '<li class="list-group-item active">
						<span>
							<b><i class="fa fa-envelope-square"> </i>      	'.$row["name"].'</b>: '.substr($row["message"],0,50).'....
						</span>
						<span   class="pull-right">
							<i>'.$row['logs'].'</i>&nbsp;
							<a href="view_mess.php?id='.$row['id'].'" class="btn btn-primary  btn-xs">View</a>
							<a href="admin_mess_del.php?id='.$row['id'].'"  class="btn btn-danger btn-xs">Delete</a>
						</span>

					</li>';
			}
			else
			{
				echo '<li class="list-group-item">
						<span>
							<b><i class="fa fa-envelope-square"></i> '.$row["name"].'</b>: '.substr($row["message"],0,50).'....
						</span>
						<span   class="pull-right">
							<i>'.$row['logs'].'</i>&nbsp;
							<a href="view_mess.php?id='.$row['id'].'" class="btn btn-primary btn-xs">View</a>
							<a href="admin_mess_del.php?id='.$row['id'].'"  class="btn btn-danger btn-xs">Delete</a>
						</span>
				</li>';
			}
			echo"<br>";
		}
	echo'</ul>';
}
else
{
	echo "<div class='alert alert-info mess'>No More Messages</div>";
}

					
					
					
					
					
					
					?>
		
		</div>
	</div>
</div>
	
	</body>
</html>