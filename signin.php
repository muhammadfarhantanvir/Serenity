<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
</head>
<body>
<div align="center"> <img src=logo_serenity.jpg alt="" /> </div>
<h2 align="center" style="color:red">Sign In</h2>
<br>

<?php
session_start();
    $servername = "localhost";
    $username = "";
    $password = "";
if(isset($_POST['submit'])){
	$conn= mysqli_connect($servername,$username,$password);
	if (!$conn) die("Cant connect: " . mysqli_connect_error());
	$user=null;
	
	//search in admin table
	$sql = "select Name,Password from admin
	where ID='$_POST[id]'";
	$mydata = mysqli_query($conn,$sql);
	$record = mysqli_fetch_array($mydata);
	if(!empty($record['Password'])){
		$user="admin";
		if($record['Password']==$_POST['pswd']){
			$_SESSION["user"]=$_POST['id'];
			header("LOCATION: admin.php");
		}else{
			echo "<font color=red>Sorry, wrong user information</font>";
		}
	}
	//search in donors table
	if($user==null){
	$sql = "select Name,Password from donors
	where Nid='$_POST[id]'";
	$mydata = mysqli_query($conn,$sql);
	$record = mysqli_fetch_array($mydata);
	if(!empty($record['Password'])){
		$user="donor";
		if($record['Password']==$_POST['pswd']){
			$_SESSION["category"]="donors";
			$_SESSION["user"]=$_POST[id];
			header("LOCATION: user.php");
		}else{
			echo "<font color=red>Sorry, wrong user information</font>";
		}
	}
	}
	//search in volunteers
	if($user==null){
		$sql = "select Name,Password from volunteers
		where Nid='$_POST[id]'";
	$mydata = mysqli_query($conn,$sql);
	$record = mysqli_fetch_array($mydata);
	if(!empty($record['Password'])){
		$user="volunteer";
		if($record['Password']==$_POST['pswd']){
			$_SESSION["category"]="volunteers";
			$_SESSION["user"]=$_POST[id];
			header("LOCATION: user.php");
		}else{
			echo "<font color=red>Sorry, wrong user information</font>";
		}
	}
	}
	//search in volunteersforblood
	if($user==null){
		$sql = "select Name,Password from volunteersforblood
		where Nid='$_POST[id]'";
	$mydata = mysqli_query($conn,$sql);
	$record = mysqli_fetch_array($mydata);
	if(!empty($record['Password'])){
		$user="volunteer";
		if($record['Password']==$_POST['pswd']){
			$_SESSION["category"]="volunteersforblood";
			$_SESSION["user"]=$_POST[id];
			header("LOCATION: user.php");
		}else{
			echo "<font color=red>Sorry, wrong user information</font>";
		}
	}
	}
	if($user==null) echo "<font color=red>Sorry, wrong user information</font>";
	mysqli_close($con);
}

?>

<div align="center" style="background-color:gray;color:white;padding:20px" >
<form action="signin.php" method="POST" >
NID or Admin ID: <input type="text" name="id" />
<br> <br>
Password: <input type="password" name="pswd" />
<br> <br>
<input type="reset" value="RESET" style="font-size:12pt;color:green" /> &nbsp; &nbsp;
<input type="submit" name="submit" value="LOG IN" style="font-size:12pt;color:green" />
</form>
</div>
</body>
</html>