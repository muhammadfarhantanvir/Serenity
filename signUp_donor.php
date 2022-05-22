<!DOCTYPE html>
<html>
<head>
<title>Sign up as Donor</title>
</head>
<body>

<?php
$displayForm=true;
if(isset($_POST['submit'])){
	$displayForm=false;
	$con = mysqli_connect("localhost","Amit","password" ,"Serenity");
	if (!$con) die("Cant connect: " . mysqli_error());
	$sql = "insert into Donors
	values('$_POST[name]','$_POST[nid]','$_POST[contact]','$_POST[address]',
	'$_POST[password]')";
	if(mysqli_query($con,$sql)){
	echo "<h2 align=center>Signed up successfully</h2>";
	echo "<p align=center>Thank You <b>$_POST[name]</b> for becoming a Donor</p>";
	echo "<p align=center>Your password is: $_POST[password]<p/>";
	echo "<br>";
	echo "<a href=index.php>Return Home</a>";
	}
	mysqli_close($con);
}

?>

<?php
if($displayForm){
?>
<div align="center">
<img src=logo_serenity.jpg alt="" />
<h2>Fill up the form</h2>
<form action="signUp_donor.php" method= "POST"> 
Name: <input type="text" name="name"> &nbsp; &nbsp; &nbsp; &nbsp;
NID Number: <input type="text" name="nid"> &nbsp; &nbsp; &nbsp; &nbsp;
<br> <br>
Contact Number: <input type="text" name="contact"> &nbsp; &nbsp; &nbsp; &nbsp;
<br> <br>
Address: <textarea name="address"></textarea>
<br> <br>
Password: <input type="password" name="password" />
<br> <br>
<a href="index.php">Go Back</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="submit" name="submit" value="SIGN UP" style="font-size:12pt;color:green" />
</form>
</div>
<?php
}
?>
</body>
</html>