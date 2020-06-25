<br><br><br><br><br><br>
<?php
	session_start();
	require_once "database_functions.php";
	require_once "cart_functions.php";
	if(isset($_POST['bookid'])){
		$book_id = $_POST['bookid'];
	}

	if(isset($book_id)){
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();

			$_SESSION['total_items'] = 0;
			$_SESSION['total_price'] = '0.00';
		}

		if(!isset($_SESSION['cart'][$book_id])){
			$_SESSION['cart'][$book_id] = 1;
		} elseif(isset($_POST['cart'])){
			$_SESSION['cart'][$book_id]++;
			unset($_POST);
		}
	}
	if(isset($_POST['save_change'])){
		foreach($_SESSION['cart'] as $id =>$qty){
			if($_POST[$id] == '0'){
				unset($_SESSION['cart']["$id"]);
			} else {
				$_SESSION['cart']["$id"] = $_POST["$id"];
			}
		}
	}
	$title = "booksimg/icon.jpg";
	require "inc/header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_items'] = total_items($_SESSION['cart']);
?> 
   	&nbsp;<form action="cart.php" method="post">
	<center>
	   	<table border='1' class="table" style="width:80%">
	   		<tr>
	   			<th>Item</th>
	   			<th>Price</th>
	  			<th>Quantity</th>
	   			<th>Total</th>
	   		</tr>
	   		<?php
		    	foreach($_SESSION['cart'] as $id => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getBookById($conn, $id));
			?>
			<tr>
				<td><?php echo $book['book_title'] . " by " . $book['book_author']; ?></td>
				<td><?php echo "Rs " . $book['book_price']; ?></td>
				<td><input type="text" value="<?php echo $qty; ?>" size="2" name="<?php echo $id; ?>"></td>
				<td><?php echo "Rs " . $qty * $book['book_price']; ?></td>
			</tr>
			<?php } ?>
		    <tr>
		    	<th>&nbsp;</th>
		    	<th>&nbsp;</th>
		    	<th><?php echo $_SESSION['total_items']; ?></th>
		    	<th><?php echo "Rs " . $_SESSION['total_price']; ?></th>
		    </tr>
	   	</table>
		</center>
		<center>
	   	<input type="submit" class="btn btn-info" name="save_change" value="Save Changes">
	</form>
	<br/><br/>
	<a href="checkout.php" class="btn btn-warning">Go To Checkout</a> 
	<a href="books.php" class="btn btn-warning">Continue Shopping</a>
	</center>
<?php
	} else {
		alert("");

	}
	if(isset($conn)){ mysqli_close($conn); }
	function alert($msg) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('No items in Cart!!! Please Order books');
    window.location.href='books.php';
    </script>");
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<html>
	<head>
		<style>
			.panel-footer.panel-custom 
			{
				background: black;
				color: white;
			}
		</style>
	</head>
	<body>
		<div class="panel-footer panel-custom">
			<center>
				<p><h4>"Sleep is good… And books are better."</h4></p>
				<p><h5>–George R. R. Martin</h5></p>
			</center>
		</div>
	</body>
</html>