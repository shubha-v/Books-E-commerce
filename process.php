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
		header("Location: purchase.php");
	} else {
		unset($_SESSION['err']);
	}
	require_once "database_functions.php";
	$title = "Purchase Process";
	require "inc/header.php";
	$conn = db_connect();
	extract($_SESSION['ship']);
	$card_number = $_POST['card_number'];
	$card_PID = $_POST['card_PID'];
	$card_expire = strtotime($_POST['card_expire']);
	$card_owner = $_POST['card_owner'];
	$customerid = getCustomerId($name, $address, $city, $pin_code, $country);
	if($customerid == null) {
		$customerid = setCustomerId($name, $address, $city, $pin_code, $country);
	}
	$date = date("Y-m-d H:i:s");
	insertIntoOrder($conn, $customerid, $_SESSION['total_price'], $date, $name, $address, $city, $pin_code, $country);
	$orderid = getOrderId($conn, $customerid);

	foreach($_SESSION['cart'] as $id => $qty){
		$bookprice = getbookprice($id);
		$query = "INSERT INTO order_items VALUES 
		('$orderid', '$id', '$bookprice', '$qty')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Insert value false!" . mysqli_error($conn2);
			exit;
		}
	}

	session_unset();
?>
	<br><br><br><br><br><br><br><br>
	<p class="lead text-success">Your order has been processed sucessfully. Please check your email to get your order confirmation and shipping detail!. 
	Your cart has been empty.</p>

<?php
	if(isset($conn)){
		mysqli_close($conn);
	}
?>
<html>
<head>
<style>
body  {
	background-image: url("booksimg/tu.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
</head>
</html>