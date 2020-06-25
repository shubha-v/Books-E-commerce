<?php
$title="booksimg/icon.jpg";
session_start();
include("database_functions.php");
$conn = db_connect();
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM message WHERE id=$id";
	 $conn->query($sql);
	 header("location:admin_inbox.php?mes=Message Deleted");
 }
 else
 {
	 header("location:admin_inbox.php");
 }
 
?>