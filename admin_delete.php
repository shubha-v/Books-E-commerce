<?php
	$title="booksimg/icon.jpg";
	$book_id = $_GET['bookid'];

	require_once "database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM books WHERE book_id = '$book_id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: admin_book.php");
?>