<?php
	$title="booksimg/icon.jpg";
  session_start();
  $book_id = $_GET['bookid'];
  // connecto database
  require_once "database_functions.php";
  $conn = db_connect();

  $query = "SELECT * FROM books WHERE book_id = '$book_id'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty book";
    exit;
  }

  $title = $row['book_title'];
  require "inc/header.php";
?>	
	<br><br><br>
   <p class="lead" style="margin: 25px 0"><a href="books.php"> &emsp; &emsp;Books</a> > <?php echo $row['book_title']; ?></p>
      <div class="row">
        <div class="col-md-2 text-center">
          <img class="img-responsive img-thumbnail" src="./booksimg/<?php echo $row['book_image']; ?>">
        </div>
        <div class="col-md-6">
          <h4>Book Description</h4>
          <p><?php echo $row['book_descr']; ?></p>
          <h4>Book Details</h4>
          <table class="table">
          	<?php foreach($row as $key => $value){
              if($key == "book_descr" || $key == "book_image" || $key == "book_title"){
                continue;
              }
              switch($key){
                case "book_id":
                  $key = "id";
                  break;
                case "book_title":
                  $key = "Title";
                  break;
                case "book_author":
                  $key = "Author";
                  break;
                case "book_price":
                  $key = "Price";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
          <form method="post" action="cart.php">
            <input type="hidden" name="bookid" value="<?php echo $book_id;?>">
            <input type="submit" value="Purchase / Add to cart" name="cart" class="btn btn-warning">
          </form>
       	</div>
      </div>
	  <br><br><br><br><br><br>
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
				<p><h4>"If you only read the books that everyone else is reading, you can only think what everyone else is thinking."</h4></p>
				<p><h5>-Haruki Murakami</h5></p>
			</center>
		</div>
	</body>
</html>