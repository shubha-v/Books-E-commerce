<?php
	session_start();
	require_once "admin_fun.php";
	$title = "booksimg/icon.jpg";
	require "inc/header.php";
	require "database_functions.php";
	$conn = db_connect();

	if(isset($_POST['add'])){
		$id = trim($_POST['id']);
		$id = mysqli_real_escape_string($conn, $id);
		
		$title = trim($_POST['title']);
		$title = mysqli_real_escape_string($conn, $title);

		$author = trim($_POST['author']);
		$author = mysqli_real_escape_string($conn, $author);
		
		$descr = trim($_POST['descr']);
		$descr = mysqli_real_escape_string($conn, $descr);
		
		$price = floatval(trim($_POST['price']));
		$price = mysqli_real_escape_string($conn, $price);

		
		if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
			$image = $_FILES['image']['name'];
			$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
			$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "booksimg/";
			$uploadDirectory .= $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
		}
		$query = "INSERT INTO books VALUES ('" . $id . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location: admin_book.php");
		}
	}
?>
	<br><br><br><br><br><br>
	<form method="post" action="admin_add.php" enctype="multipart/form-data">
	<center>
		<table border="1" class="table" style="width:50%">
			<tr>
				<th>id</th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required></td>
			</tr>
		</table>
		</center>
		<center>
			<input type="submit" name="add" value="Add new book" class="btn btn-warning">
			<input type="reset" value="Reset" class="btn btn-warning">
		</center>
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
?>