<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="booksimg/icon.jpg" />
        <title>BookStore</title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		.nav.navbar-nav.navbar-right li a
			{
				color: white;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">&emsp;&emsp;&emsp;&emsp;<i style="font-size:24px" class="fa">&#xf02d;</i>&nbsp;&nbsp;<font style="color:white">BookStore</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="books.php">Books</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="admin.php">Admin</a></li>
					<form class="navbar-form navbar-left" action="search.php">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
						</div>
						<button type="submit" class="btn btn-warning">Submit</button>
					</form>
				</ul>
			</div>
		</nav>
	</body>
</html>
<?php
  session_start();
  $title = "booksimg/icon.jpg";
  $count = 0;
  require_once "database_functions.php";
  $conn = db_connect();

  $query = "SELECT book_id, book_image FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

?>
<br><br><br><br>
  <p class="lead text-center text-muted">Books</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
		
      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-2">
            <a href="book.php?bookid=<?php echo $query_row['book_id']; ?>">
              <img class="img-responsive img-thumbnail" src="./booksimg/<?php echo $query_row['book_image']; ?>">
            </a>
          </div>
        <?php
          $count++;
          if($count >= 6){
              $count = 0;
              break;
            }
          } ?> 
      </div>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
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
				<p><h4>"Wherever I am, if I've got a book with me, I have a place I can go and be happy."</h4></p>
				<p><h5>	–J. K. Rowling</h5></p>
			</center>
		</div>
	</body>
</html>