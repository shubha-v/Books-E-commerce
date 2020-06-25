<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="booksimg/icon.jpg" />
        <title>BookStore</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style/index.css">
		<style>
			.panel-footer.panel-custom 
			{
				background: black;
				color: white;
			}
			.image
			{
				background-image: url("booksimg/wall.png");
				
			}
		<style>
	</head>
	<body>
		<?php
                require 'inc/header.php';
            ?>
		<div class="image"></div>
			<div class="text">
				<p><h2>There always comes a moment when I'd rather be reading a book.</h2></p>
				<a href="books.php" class="page-scroll btn btn-warning btn-xl sr-button">buynow</a>
			</div>
		<br><br><br>
		<section id="category">
           <div class="container">
               <div class="row">
                   <div class="col-xs-3">
                       <div  class="thumbnail">
                           <a href="books.php">
                                <img src="booksimg/c1.jpg" alt="Children" width=40%>
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Children</p>
                                        <p>Children’s books are a fascinating blend of simplicity and life lessons.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="books.php">
                               <img src="booksimg/m1.jpg" alt="Motivation" width=40%>
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Motivation</p>
                                    <p>Be yourself; everyone else is already taken.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="books.php">
                               <img src="booksimg/h1.jpg" alt="Horror" width=40%>
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Horror</p>
                                   <p>Everybody is a book of blood; wherever we're opened, we're red.</p>
                               </div>
                           </center>
                       </div>
                   </div>
				   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="books.php">
                               <img src="booksimg/l1.jpg" alt="romance" width=40%>
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Romance</p>
                                   <p>We are all fools in love.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
			   <div class="row">
                   <div class="col-xs-3">
                       <div  class="thumbnail">
                           <a href="books.php">
                                <img src="booksimg/a1.jpg" alt="Adventure" width=40%>
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Adventure</p>
                                        <p>Life begins at the end of your comfort zone..</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="books.php">
                               <img src="booksimg/t1.jpg" alt="travel" width=40%>
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Travel</p>
                                    <p>The world is a book and those who do not travel read only one page.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="books.php">
                               <img src="booksimg/ab1.jpg" alt="Autobiography" width=40%>
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Autobiography</p>
                                   <p>Autobiography begins with a sense of being alone. It is an orphan form.</p>
                               </div>
                           </center>
                       </div>
                   </div>
				   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="books.php">
                               <img src="booksimg/cr1.jpg" alt="Crime" width=40%>
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Crime</p>
                                   <p>Don't compromise yourself - you're all you have.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
		</section>
        <br><br><br>
		<section id="contact">
		<div class="panel-footer panel-custom">
			<center>
				<p><h2>Contact Details</h2></p>
				<p>Email: vshubha1998@gmail.com</p>
				<p>Phone: **********  </p>
				<p>Address: Bangalore</p>
				<a href="https://www.instagram.com/?hl=en"><i style="font-size:24px" class="fa">&#xf16d;</i></a>&nbsp;
				<a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"><i style="font-size:24px" class="fa">&#xf0d5;</i></a>&nbsp;
				<a href="https://www.linkedin.com/in/shubha-v-3b2a7b149/"><i style="font-size:24px" class="fa">&#xf08c;</i>
			</center>
		</div>
		</section>
	</body>
</html>
