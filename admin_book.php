<?php
	$title="booksimg/icon.jpg";
	session_start();
	require_once "admin_fun.php";
	$title = "List book";
	require_once "inc/header.php";
	require_once "database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>		
	<br><br><br><br><br><br>
	<center>
	<a href="admin_add.php" class="btn btn-warning">Add new book</a>&nbsp;&nbsp;
	<a href="admin_inbox.php" class="btn btn-warning">Inbox</a>&nbsp;&nbsp;
	<a href="admin_signout.php" class="btn btn-warning">Sign out!</a>
	</center>
	<center>
	<table border="1" class="table" style="margin-top: 20px;width:80%"  >
		<tr>
			<th>id</th>
			<th>Title</th>
			<th>Author</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['book_id']; ?></td>
			<td><?php echo $row['book_title']; ?></td>
			<td><?php echo $row['book_author']; ?></td>
			<td><?php echo $row['book_image']; ?></td>
			<td><?php echo $row['book_descr']; ?></td>
			<td><?php echo $row['book_price']; ?></td>
			<td><a href="admin_edit.php?bookid=<?php echo $row['book_id']; ?>">Edit</a></td>
			<td><a href="admin_delete.php?bookid=<?php echo $row['book_id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
	</center>

<?php
	if(isset($conn)) {mysqli_close($conn);}
?>