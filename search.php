<?php
	session_start();
	require 'inc/header.php';
?>
<br><br><br>
<div class="container search-page">
	<div class="row">
		<?php
			include 'database_functions.php';
			$conn = db_connect();
			$user_keyword = $_GET['search'];
			$queryproduct =  "select * from books where book_title LIKE '%$user_keyword%'";
			$result = $conn->query($queryproduct);

			if ($result->num_rows > 0) 
			{
				while($rowproduct = $result->fetch_assoc()) 
				{
					$book_id = $rowproduct['book_id'];
					$book_title = $rowproduct['book_title'];
					$book_author = $rowproduct['book_author'];
					$book_image = $rowproduct['book_image'];
					$book_descr = $rowproduct['book_descr'];
					$book_price = $rowproduct['book_price'];
					echo "
						<div class='col-md-2'>
							<div id='single_product'>
								<h3>$book_title</h3>								
								<img class='img-responsive img-thumbnail' src='booksimg/$book_image' width='160' height='160'/><br>
								<a href='book.php?bookid=$book_id' style='float:left;'>
									<input type='submit' value='Purchase / Add to cart' name='cart' class='btn btn-warning'>
								</a>
							</div>	
						</div>
					";
		?>
		<?php 
				}
			} 
			else 
			{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Item not found!!!');
				window.location.href='books.php';
				</script>");
			}
		?>
	</div>
</div>