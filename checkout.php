<?php
	session_start();
	require_once "database_functions.php";
	require "inc/header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
	<br><br><br><br>
	<p class="lead" style="margin: 25px 0"><a href="cart.php">&emsp;Back</a> >>
	<center>
	<table border='2px solid red' class="table" style="width:80%">
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
			<td><?php echo $qty; ?></td>
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
	<form method="post" action="purchase.php" class="form-horizontal">
		<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
			<p class="text-danger">All fields have to be filled</p>
			<?php } ?>
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="col-md-4" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="address" class="control-label col-md-4">Address</label>
			<div class="col-md-4">
				<input type="text" name="address" class="col-md-4" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="control-label col-md-4">City</label>
			<div class="col-md-4">
				<input type="text" name="city" class="col-md-4" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="zip_code" class="control-label col-md-4">Pin Code</label>
			<div class="col-md-4">
				<input type="text" name="pin_code" class="col-md-4" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="control-label col-md-4">Country</label>
			<div class="col-md-4">
				<input type="text" name="country" class="col-md-4" class="form-control" required>
			</div>
		</div>
		<center>
		<div class="form-group">
			<input type="submit" name="submit" value="Purchase" class="btn btn-warning">
		</div>
		</center>
	</form>
		</center>
	<p class="lead">&emsp;&emsp;&emsp;Please press Purchase to confirm your purchase, or Back to add or remove items.</p>
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
?>

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
				<p><h4>"Many people, myself among them, feel better at the mere sight of a book."</h4></p>
				<p><h5>–Jane Smiley</h5></p>
			</center>
		</div>
	</body>
</html>