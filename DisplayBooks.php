<!DOCTYPE HTML>
<html>
<body bgcolor="white">
<center><h2>Simple Library Management System</h2></center>
<br>
 
<?php
include("DBConnection.php");

 $search="";
 $error="";
 if(isset($_POST['sub']) )
{

	$IS=$_POST["ISBN"];
	$query = "SELECT ISBN,Title,Author,Edition,Publication,Quantity from books where ISBN= $IS "; //search with a book name in the table book_info
	$result = mysqli_query($db,$query);
	$row=mysqli_fetch_assoc($result);
	
	$q=$row['Quantity'] + $_POST['quantity_is'];
	$query1="UPDATE books SET Quantity=$q WHERE ISBN='$IS' ";
	mysqli_query($db,$query1);
		
	
	
	$search=$row["Title"];
	
}
if(isset($_POST['issue']) )
{

	$IS=$_POST["ISBN"];
	$query = "SELECT ISBN,Title,Author,Edition,Publication,Quantity from books where ISBN= $IS "; //search with a book name in the table book_info
	$result = mysqli_query($db,$query);
	$row=mysqli_fetch_assoc($result);
	if($row['Quantity']>=$_POST['quantity_is'])
	{
		$q=$row['Quantity'] - $_POST['quantity_is'];
		$query1="UPDATE books SET Quantity=$q WHERE ISBN='$IS' ";
		mysqli_query($db,$query1);
		
	}
	if($row['Quantity']<$_POST['quantity_is'])
	{
		$error="The quantity of books you entered is not available";
	}
	$search=$row["Title"];
	
}

if(isset($_REQUEST["search"]) || isset($_POST['issue']) || isset($_POST['sub'])) 
{
if(isset($_REQUEST["search"]))
{
$search = $_REQUEST["search"];
}

 
$query = "select ISBN,Title,Author,Edition,Publication,Quantity from books where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)
 
{
?>
 <center><h3>Found book successfully</h3></center>
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
<th>Quantity</th>
</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
<td><?php echo $row["Quantity"];?> </td>

</tr>
<?php
}
}
}

else


echo "<center>No books found in the library by that name</center></br></br>";
echo "<center><a href='SearchBooks.php'>To try again click here </a></center></br></br>";
echo "<strong>"."<center>"."<font color = 'red'>".$error."</font>"."</center>"."</strong>";
echo"</br></br>"
?>
<?php 
if(mysqli_num_rows($result)>0)
{
	?>
</table>
</br>
<form action="DisplayBooks.php" method="post">
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Quantity :</td>
<td> <input type="number" name="quantity_is" size="48"> </td>
</tr>
<tr>
<td> ISBN :</td>
<td> <input type="number" name="ISBN" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="Issue this book" name="issue">
</td>
<td>
<input type="submit" value="Restock this book" name="sub">
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>
<br>