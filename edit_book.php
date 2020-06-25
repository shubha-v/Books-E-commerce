<?php	
	$title="booskimg/icon.jpg";
	if(!isset($_POST['save_change'])){
		echo "Something wrong!";
		exit;
	}

	$id = trim($_POST['id']);
	$title = trim($_POST['title']);
	$author = trim($_POST['author']);
	$descr = trim($_POST['descr']);
	$price = floatval(trim($_POST['price']));

	if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
		$image = $_FILES['image']['name'];
		$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
		$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "booksimg/";
		$uploadDirectory .= $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
	}

	require_once("database_functions.php");
	$conn = db_connect();
	$query = "UPDATE books SET  
	book_title = '$title', 
	book_author = '$author', 
	book_descr = '$descr', 
	book_price = '$price'";
	if(isset($image)){
		$query .= ", book_image='$image' WHERE book_id = '$id'";
	} else {
		$query .= " WHERE book_id = '$id'";
	}
	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($conn);
		exit;
	} else {
		header("Location: admin_edit.php?bookid=$id");
	}
?>