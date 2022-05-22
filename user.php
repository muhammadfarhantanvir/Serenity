<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
</head>
<body>
<div align="center" style="color:green">
<img src="logo_serenity.jpg" alt="" >
<h3>Welcome</h3>
<?php
session_start();
$con = mysqli_connect("localhost","Amit","password" ,"Serenity");
if(isset($_POST['submit'])){
	$sql = "update $_SESSION[category]
	set $_POST[field] = '$_POST[val]'
	where Nid = '$_SESSION[user]'";
	if(!mysqli_query($con,$sql)){
		die("can't update:" . mysqli_error());
	}
	echo "Updated! <br> <br>";
}else if(isset($_POST['del'])){
	$sql = "delete from $_SESSION[category]
	where Nid = '$_SESSION[user]'";
	mysqli_query($con,$sql);
	header("LOCATION: logout.php");
}

if ($_SESSION["category"]=="donors") {
$user=$_SESSION["user"];
$dsp  = mysqli_query($con, "select * from $_SESSION[category] where Nid='$user'");

echo "<table border=2px>";
echo "<tr>";
echo "<th>";
echo "Name";
echo "</th>";
echo "<th>";
echo "NID";
echo "</th>";
echo "<th>";
echo "Contacts";
echo "</th>";
echo "<th>";
echo "Address";
echo "</th>";
echo "<th>";
echo "Password";
echo "</th>";
echo "</tr>";

while ($result = mysqli_fetch_array($dsp, MYSQLI_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $result['Name'] . "</td>";
    echo "<td>" . $result['Nid'] . "</td>";
    echo "<td>" . $result['Contact'] . "</td>";
    echo "<td>" . $result['Address'] . "</td>";
    echo "<td>" . $result['Password'] . "</td>";
    echo "</tr>";
    
}
echo "</table>";
}



else if ($_SESSION["category"]=="volunteers") {
$user=$_SESSION["user"];
$dsp  = mysqli_query($con, "select * from $_SESSION[category] where Nid='$user'");
echo "<table border=2px>";
echo "<tr>";
echo "<th>";
echo "Name";
echo "</th>";
echo "<th>";
echo "NID";
echo "</th>";
echo "<th>";
echo "Age";
echo "</th>";
echo "<th>";
echo "Gender";
echo "</th>";
echo "<th>";
echo "Contact";
echo "</th>";
echo "<th>";
echo "Address";
echo "</th>";
echo "</tr>";

while ($result = mysqli_fetch_array($dsp, MYSQLI_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $result['Name'] . "</td>";
    echo "<td>" . $result['Nid'] . "</td>";
    echo "<td>" . $result['Age'] . "</td>";
    echo "<td>" . $result['Gender'] . "</td>";
    echo "<td>" . $result['Contact'] . "</td>";
    echo "<td>" . $result['Address'] . "</td>";
    echo "</tr>";
    
}
echo "</table>";
}


else if ($_SESSION["category"]=="volunteersforblood") {
$user=$_SESSION["user"];
$dsp  = mysqli_query($con, "select * from $_SESSION[category] where Nid='$user'");
echo "<table border=2px>";
echo "<tr>";
echo "<th>";
echo "Name";
echo "</th>";
echo "<th>";
echo "NID";
echo "</th>";
echo "<th>";
echo "Age";
echo "</th>";
echo "<th>";
echo "Gender";
echo "</th>";
echo "<th>";
echo "Contact";
echo "</th>";
echo "<th>";
echo "blood Group";
echo "</th>";
echo "<th>";
echo "Address";
echo "</th>";
echo "</tr>";

while ($result = mysqli_fetch_array($dsp, MYSQLI_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $result['Name'] . "</td>";
    echo "<td>" . $result['Nid'] . "</td>";
    echo "<td>" . $result['Age'] . "</td>";
    echo "<td>" . $result['Gender'] . "</td>";
    echo "<td>" . $result['Contact'] . "</td>";
    echo "<td>" . $result['bloodGroup'] . "</td>";
    echo "<td>" . $result['Address'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
mysqli_close($con);
?>

<br>
<a href="logout.php">Logout</a>
<br><br> Update Your Data:<br> <br>
<form action="user.php" method="POST">
Field: <input type="text" name="field" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
New Value: <input type="text" name="val" />
<input type="submit" name="submit" value="UPDATE" /> <br><br>
<input type="submit" name="del" value="DELETE MEMBERSHIP" style="font-size:12pt;color:white;background-color:red" />
</form>
</div>
</body>
</html>