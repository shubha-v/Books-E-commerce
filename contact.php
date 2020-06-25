<?php require_once "database_functions.php";
  $conn = db_connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="booksimg/icon.jpg" />
<title>Books Store</title>
<style>
body  {
	background-image: url("booksimg/cont.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-height: 100%;
}
</style>
</head>
<body>

<?php
	 include"inc/header.php";
?>
    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">

			<div class="row">
				<div class="col-md-8">
				<?php
					if(isset($_POST["submit"]))
					{
					 $sql="INSERT INTO message (NAME, EMAIL, MESSAGE, STATUS,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
						if($conn->query($sql))
				{
					echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Your message has been Successfully sent.
					</div>
					
					
					';
				}
					}
				?>
		
				<h3 class='text-danger'>Send us a Message</h3>
                <form method="post" action="contact.php" role="form" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-danger" name="submit"><i class='fa fa-send'></i> Send Message</button>
                </form>
			</div>
        </div>
    </div>
</body>
</html>
