<!DOCTYPE HTML>
<html>
<body bgcolor="white">
<center><h2>Simple Library Management System</h2></center>

<form action="InsertBooks.php" method="post">
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter ISBN :</td>
<td> <input type="number" name="ISBN" size="48"> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="Title" size="48"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="Author" size="48"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="number" name="Edition" size="48"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="Publication" size="48"> </td>
</tr>
<tr>
<td> Enter Quantity: </td>
<td> <input type="number" name="Quantity" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>