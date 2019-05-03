<!DOCTYPE HTML>
<html>
<body bgcolor="white">
<center><h2>Simple Library Management System</h2></center>
<br>
 
<?php
include("DBConnection.php");

 
$isbn=$_POST["ISBN"];
$title=$_POST["Title"];
$author=$_POST["Author"];
$edition=$_POST["Edition"];
$publication=$_POST["Publication"];
$quantity=$_POST["Quantity"];
 
$query = "insert into books(ISBN,Title,Author,Edition,Publication,Quantity) values($isbn,'$title','$author',$edition,'$publication',$quantity)"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
 
?>
 
<center><h3> Book information is inserted successfully </h3></center>
 
<center><a href="SearchBooks.php"> To search for the Book information click here </a></center>
 
</body>
</html>