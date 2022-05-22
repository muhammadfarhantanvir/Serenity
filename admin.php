<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>

<style type="text/css">
	body{
		text-align: center
	}
	table{
		margin: 0 auto
	}
</style>
<body>
<a href="logout.php">Log Out</a>
<?php
session_start();
$con = mysqli_connect("localhost","Amit","password" ,"Serenity");
$data = mysqli_query ($con,"select Name from accounts,admin where ManagedBy_ID=ID AND ID='$_SESSION[user]'");
$name=mysqli_fetch_array($data);
echo "<h3>Welcome $name[Name]</h3>";
?>

<h2>Registered accounts of your Company</h2>

<?php
if(isset($_POST['submit'])){
	$sql = "update Accounts
	set $_POST[field] = '$_POST[val]'
	where ManagedBy_ID = '$_SESSION[user]'";
	mysqli_query($con,$sql);
}else if(isset($_POST['del'])){
	$sql = "delete from $_POST[group]
	where NID='$_POST[nid]'";
	mysqli_query($con, $sql);
}

$dsp  = mysqli_query($con, "SELECT * from accounts");

echo "<table border=1px>";
echo "<tr>";
echo "<th>";
echo "Account ID";
echo "</th>";
echo "<th>";
echo "Managed by";
echo "</th>";
echo "<th>";
echo "Current Balance";
echo "</th>";
echo "<th>";
echo "Spent";
echo "</th>";
echo "</tr>";
while ($result = mysqli_fetch_array($dsp, MYSQLI_ASSOC)) {
    
    echo "<tr>";
    
    echo "<td>" . $result['AccID'] . "</td>";
    echo "<td>" . $result['ManagedBy_ID'] . "</td>";
    echo "<td>" . $result['CurrentBalance'] . "</td>";
    echo "<td>" . $result['Spent'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<form action="admin.php" method="POST">
<br>
Select: <input type="radio" name="field" value="CurrentBalance" checked="checked"/>Current Balance
<input type="radio" name="field" value="Spent" />Spent <br>
Amount(Taka): <input type="text" name="val" />
<input type="submit" name="submit" value="UPDATE" /> <br>
</form>

<h2>Admin Details</h2>
<?php
$dsp  = mysqli_query($con, "SELECT * from admin");

echo "<table border=1px>";
echo "<tr>";
echo "<th>";
echo "Name";
echo "</th>";
echo "<th>";
echo "ID";
echo "</th>";
echo "<th>";
echo "Contacts";
echo "</th>";
echo "<th>";
echo "Address";
echo "</th>";
echo "</tr>";
while ($result = mysqli_fetch_array($dsp, MYSQLI_ASSOC)) {
    
    echo "<tr>";
    
    echo "<td>" . $result['Name'] . "</td>";
    echo "<td>" . $result['ID'] . "</td>";
    echo "<td>" . $result['Contact'] . "</td>";
    echo "<td>" . $result['Address'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>

<h2>Program Details</h2>
<?php
$dsp  = mysqli_query($con, "SELECT * from programs ORDER BY Date");

echo "<table border=1px>";
echo "<tr>";
echo "<th>";
echo "Program ID";
echo "</th>";
echo "<th>";
echo "Type";
echo "</th>";
echo "<th>";
echo "Location";
echo "</th>";
echo "<th>";
echo "Volunteer Count";
echo "</th>";
echo "<th>";
echo "Date";
echo "</th>";
echo "</tr>";
while ($result = mysqli_fetch_array($dsp, MYSQLI_ASSOC)) {
    
    echo "<tr>";
    echo "<td>" . $result['ProgramID'] . "</td>";
    echo "<td>" . $result['Type'] . "</td>";
    echo "<td>" . $result['Location'] . "</td>";
    echo "<td>" . $result['Volunteer_Count'] . "</td>";
    echo "<td>" . $result['Date'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<a href="signUp_donor.php"><br>Add a Program</a>

<h2>Donor Details</h2>
<?php
$dsp  = mysqli_query($con, "SELECT * from donors");

echo "<table border=1px>";
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
echo "</tr>";
while ($result = mysqli_fetch_array($dsp, MYSQLI_ASSOC)) {
    
    echo "<tr>";
    echo "<td>" . $result['Name'] . "</td>";
    echo "<td>" . $result['Nid'] . "</td>";
    echo "<td>" . $result['Contact'] . "</td>";
    echo "<td>" . $result['Address'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
<a href="signUp_donor.php"><br><big>Add a Donor</big></a>
<h2>Blood Donor Details</h2>
<?php
$dsp  = mysqli_query($con, "SELECT * from volunteersforblood");

echo "<table border=1px>";
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
echo "Blood Group";
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
?>
<h2>Volunteer Details</h2>
<?php
$dsp  = mysqli_query($con, "SELECT * from volunteers");

echo "<table border=1px>";
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
mysqli_close($con);

?>
<a href="signUp_vol.php"><br><big>Add a Volunteer</big></a>

<form action="admin.php" method="POST">
<font color="red"><h2>Delete Membership</h2></font>
Select Group: <input type="radio" name="group" value="donors" checked="checked"/>Donors
<input type="radio" name="group" value="volunteers" />Volunteers
<input type="radio" name="group" value="volunteersforblood" />Blood Donors <br> <br>
Type NID: <input type="text" name="nid" />
<input type="submit" name="del" value="DELETE" style="font-size:12pt;color:white;background-color:red" /> <br>
<br>
<br>
</form>
</body>
</html>
