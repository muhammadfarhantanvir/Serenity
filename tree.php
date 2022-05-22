<!DOCTYPE html>
<html>
<title>Serenity</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="fonts/g1.css">
<link rel="stylesheet" href="fonts/g2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-pagelines,.fa-tint,.fa-money{font-size:250px}
img{
  max-width: 100%
}
.logo{
	background: url(img/logo.jpg);
}


</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <i><img src="img/logo.jpg" style="width: 111px;margin: 0;padding: 0;"></i>
    <div class="w3-right">
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">HOME</a>
    
    <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-large">Sign Up</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-2 w3-center">
      <a href="signUp_donor.php" class="w3-bar-item w3-button w3-border-bottom">As a Donor</a>
      <a href="signUp_vol.php" class="w3-bar-item w3-button w3-border-bottom">As a Volunteer</a>
    </div>
    </div>
    <a href="signin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">SIGN IN</a>

    <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-large">PROGRAMS</button>
 <div class="w3-dropdown-content w3-bar-block w3-card-2 w3-center">
      <a href="tree.php" class="w3-bar-item w3-button w3-border-bottom">Tree Plantation</a>
      <a href="blood.php" class="w3-bar-item w3-button w3-border-bottom">Blood Donation</a>
      <a href="cash.php" class="w3-bar-item w3-button w3-border-bottom">Financial Support</a>
      <a href="about.php" class="w3-bar-item w3-button">About Us & Contact</a>
    </div>
  </div>
</div>
</div>


</div>






<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container" id="tree-plantation" >
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Tree Plantation</h1>
      <h5 class="w3-padding-32">After many successful campaign of tree planting last year and this year, now Serenity organization is starting another "Tree plantation campaign 2017". We welcome you all be a part of this campaign either at individual level or in group. Please join this event & help us making Bangladesh green.</h5>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-pagelines w3-padding-64 w3-text-green"></i>
    </div>
  </div>
  <div class ="w3-row-padding w3-padding-16">
  <div class="w3-third">
  	<img src="img/t1.jpg"><br>Tree planting field work, near Keranigonj, 2014
  </div>
  <div class="w3-third">
  	<img src="img/t2.jpg"><br>Tree plantation program at Rajshahi; July,2015
  </div>
  <div class="w3-third">
  	<img src="img/t3.jpg"><br>Volunteers working for Annual tree planting program-2016
  </div>
  	
  </div>
  <div align="center">
<h2>Volunteers Details</h2>
  <?php
$dbcon = mysqli_connect("localhost","Amit","password" ,"Serenity");
$dsp  = mysqli_query($dbcon, "SELECT * from volunteers");



echo "<table border=1px>";
echo "<tr>";
echo "<th>";
echo "Name";
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
    echo "<td>" . $result['Age'] . "</td>";
    echo "<td>" . $result['Gender'] . "</td>";
    echo "<td>" . $result['Contact'] . "</td>";
    echo "<td>" . $result['Address'] . "</td>";
    echo "</tr>";
}
echo "<table>";


?>
</div>
</div>






<!-- Footer -->
<footer class="w3-container w3-padding-16 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>

</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
