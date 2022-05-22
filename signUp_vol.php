<!DOCTYPE html>
<html>
<head>
<title>Sign up as Volunteer</title>
</head>
<body>

<?php
$displayForm=true;
if(isset($_POST['submit'])){
	$displayForm=false;
	$con = mysqli_connect("localhost","Amit","password" ,"Serenity");
	if (!$con) die("Cant connect: " . mysqli_error());
	//insert into required table
	if(isset($_POST['donate'])){
		//VolunteerForBlood table
		$sql = "insert into VolunteersForBlood
		values('$_POST[name]','$_POST[nid]','$_POST[age]','$_POST[gender]','$_POST[contact]',
		'$_POST[blood]','$_POST[address]','$_POST[password]')";
	}else{
		$sql = "insert into Volunteers
		values('$_POST[name]','$_POST[nid]','$_POST[age]','$_POST[gender]','$_POST[contact]',
		'$_POST[address]','$_POST[password]')";
	}
	if(mysqli_query($con,$sql)){
	echo "<h2 align=center>Signed up successfully</h2>";
	echo "<p align=center>Congrats <b>$_POST[name]</b></p>";
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
<div align="center" >
<img src=logo_serenity.jpg alt="" />
<h2 align="center">Fill up the form</h2>
<form action="signUp_vol.php" method= "POST"> 
Name: <input type="text" name="name"> &nbsp; &nbsp; &nbsp; &nbsp;
NID Number: <input type="text" name="nid"> &nbsp; &nbsp; &nbsp; &nbsp;
Age: <input type="number" name="age">
<br /> <br />
Select Gender: <input type="radio" name="gender" value="male" checked="checked"/>Male &nbsp;
<input type="radio" name="gender" value="female" />Female
<br /> <br />
Contact Number: <input type="text" name="contact"> &nbsp; &nbsp;
Blood Group: <input type="text" name="blood">
<br /> <br />
<font color="red">* </font>Do you wish to donate blood? &nbsp;
<input type="checkbox" name="donate" value="yes"/><span style="color:green">Yes</span>
<br /> <br />
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