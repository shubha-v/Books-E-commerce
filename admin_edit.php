<?php
	$title="booksimg/icon.jpg";
	session_start();
	require_once "admin_fun.php";
	$title = "Edit book";
	require_once "inc/header.php";
	require_once "database_functions.php";
	$conn = db_connect();

	if(isset($_GET['bookid'])){
		$book_id = $_GET['bookid'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($book_id)){
		echo "Empty id! check again!";
		exit;
	}

	// get book data
	$query = "SELECT * FROM books WHERE book_id = '$book_id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<br><br><br><br><br><br>
	<form method="post" action="edit_book.php" enctype="multipart/form-data">
	<center>
		<table class="table" style="width:80%>
			<tr>
				<th>id</th>
				<td><input type="text" name="id" value="<?php echo $row['book_id'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" value="<?php echo $row['book_title'];?>" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" value="<?php echo $row['book_author'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"><?php echo $row['book_descr'];?></textarea>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" value="<?php echo $row['book_price'];?>" required></td>
			</tr>
		</table>
		</center>
		<center>
		<input type="submit" name="save_change" value="Change" class="btn btn-danger">
		<input type="reset" value="reset" class="btn btn-danger">
		</center>
	</form>
	<br/>
	&emsp;&emsp;<a href="admin_book.php" class="btn btn-success">Confirm</a>
<?php
	if(isset($conn)) {mysqli_close($conn);}
?>