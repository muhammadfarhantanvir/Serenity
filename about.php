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
table{
  margin: 0 auto;
  
}
h2{
  text-align: center;
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






<div class="w3-container w3-light-grey w3-center w3-padding-64" id="about">
<h1>About Us</h1>
<p style="font-size: 20px">Serenity is a civil society volunteering organization established in April 2012 and based in Bangladesh. Serenity operates with the help of its employees and volunteer platform to work towards the betterment of nature and people living below the poverty line. The organization has a separate branch for donating blood to help out the people in need at emergency. The welfare activities of Serenity organisation has spread over 150 sub districts of Bangladesh, hosting tree plantation programs, donating blood and offering financial support to orphanage and natural disaster affected people. You are cordially welcome to join our team as a volunteer or consider yourself as a donor and be a hero! 
60 million under privileged people are waiting for your response...
</p>
    <br>
    <br>
    <br>
    <h1>Contact</h1>
    <p>
    	SERENITY Volunteering Organization <br>
		MK bhaban, 3rd floor <br>
		Kawran Bazar, Dhaka <br>

		Contact us: <br>
		01818262743 <br> 
		01745667782
    </p>

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
