<?php
	$title="booksimg/icon.jpg";
	session_start();
	$_SESSION['err'] = 1;
	foreach($_POST as $key => $value){
		if(trim($value) == ''){
			$_SESSION['err'] = 0;
		}
		break;
	}

	if($_SESSION['err'] == 0){
		header("Location: checkout.php");
	} else {
		unset($_SESSION['err']);
	}


	$_SESSION['ship'] = array();
	foreach($_POST as $key => $value){
		if($key != "submit"){
			$_SESSION['ship'][$key] = $value;
		}
	}
	require_once "database_functions.php";
	$title = "Purchase";
	require "inc/header.php";
	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
<br><br><br><br>
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
		<tr>
			<td>Shipping</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>20.00</td>
		</tr>
		<tr>
			<th>Total Including Shipping</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo "Rs " . ($_SESSION['total_price'] + 20); ?></th>
		</tr>
	</table>
	</center>
	<center>
	<form method="post" action="process.php" class="form-horizontal">
		<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
		<p class="text-danger">All fields have to be filled</p>
		<?php } ?>
        <div class="form-group" style="width:50%">
            <label for="card_type" class="col-lg-2 control-label">Type</label>
            <div class="col-lg-10">
              	<select class="form-control" name="card_type" required>
                  	<option value="VISA">VISA</option>
                  	<option value="MasterCard">MasterCard</option>
                  	<option value="American Express">American Express</option>
              	</select>
            </div>
        </div>
        <div class="form-group" style="width:50%">
            <label for="card_number" class="col-lg-2 control-label">Number</label>
            <div class="col-lg-10">
              	<input type="text" class="form-control" name="card_number" required>
            </div>
        </div>
        <div class="form-group" style="width:50%">
            <label for="card_PID" class="col-lg-2 control-label">PID</label>
            <div class="col-lg-10">
              	<input type="text" class="form-control" name="card_PID" required>
            </div>
        </div>
        <div class="form-group" style="width:50%">
            <label for="card_expire" class="col-lg-2 control-label">Expiry Date</label>
            <div class="col-lg-10">
              	<input type="date" name="card_expire" class="form-control" required>
            </div>
        </div>
        <div class="form-group" style="width:50%">
            <label for="card_owner" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
              	<input type="text" class="form-control" name="card_owner" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              	<a href="checkout.php" class="btn btn-warning">Back</a></button>
              	<button type="submit" class="btn btn-warning">Purchase
				</button>
            </div>
        </div>
    </form>
	</center>
	<p class="lead"><center><h5>Please press Purchase to confirm your purchase, or Back to add or remove items.</h5></center></p>
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
?>
<html>
<head>
<style>
body  {
	background-image: url("booksimg/card.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-height: 100%;
}
</style>
</head>
</html>