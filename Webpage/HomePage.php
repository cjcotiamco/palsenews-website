<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Palse Tourism</title>
	<link rel="icon" type="image/png" href="images/logo.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
</head>

<style>
	

/* Header/Logo Title */
	.mySlides {display: none;}

	img {vertical-align: middle;}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 2000px;
	  position: relative;
	  background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
	}

	/* Caption text */
	.text {
	  color: yellow;
	  padding: 50px 70px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	  font-size: 20px;
		text-shadow: 2px 2px #000000;
	}

	.active {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .text {font-size: 11px}
	}


/* Sidebar */
@import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
	.sidebar {
	  height: 100%;
	  width: 0;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
	  overflow-x: hidden;
	  transition: 0.5s;
	  padding-top: 60px;
	}
	.sidebar a {
	  padding: 8px 8px 8px 32px;
	  text-decoration: none;
	  font-size: 20px;
	  color: #818181;
	  display: block;
	  transition: 0.3s;
	}
	.sidebar a:hover {
	  color: #f1f1f1;
	}
	.sidebar .closebtn {
	  position: absolute;
	  top: 0;
	  right: 25px;
	  font-size: 36px;
	  margin-left: 50px;
	}
	.openbtn {
	  font-size: 17px;
	  cursor: pointer;
	  background-color: #111;
	  color: white;
	  border: none;
	}
	.openbtn:hover {
	  background-color: #444;
	}
	#main {
	  transition: margin-left .5s;
	}
	@media screen and (max-height: 450px) {
	  .sidebar {padding-top: 15px;}
	  .sidebar a {font-size: 18px;}
	}

/* MARGIN */
	.content {
	  font-size: 20px;
	}

/* HOVER SHAKE IMAGE */ 
	.shake:hover {
	  animation: shake 0.5s;
	  animation-iteration-count: infinite;
	}

	@keyframes shake {
	  0% { transform: translate(1px, 1px) rotate(0deg); }
	  10% { transform: translate(-1px, -2px) rotate(-1deg); }
	  20% { transform: translate(-3px, 0px) rotate(1deg); }
	  30% { transform: translate(3px, 2px) rotate(0deg); }
	  40% { transform: translate(1px, -1px) rotate(1deg); }
	  50% { transform: translate(-1px, 2px) rotate(-1deg); }
	  60% { transform: translate(-3px, 1px) rotate(0deg); }
	  70% { transform: translate(3px, 1px) rotate(-1deg); }
	  80% { transform: translate(-1px, -1px) rotate(1deg); }
	  90% { transform: translate(1px, 2px) rotate(0deg); }
	  100% { transform: translate(1px, -2px) rotate(-1deg); }
	}

/* FLEXBOX */
	* {
	  box-sizing: border-box;
	}

	.row {
		display: flex;
	}

	.column {
		flex: 16.66%;
		padding: 5px;
	}

/* FOOTER */
	footer {
	  text-align: center;
	  padding: 3px;
	}




</style>


<body>

<!-- HEADER -->
	<div class="slideshow-container">
		<div class="mySlides fade">
		  <img src="images/a1.jpg" style="width:1350px; height: 320px">
		  <div class="text">
		  	<h1>THE CITY OF GOLDEN FRIENDSHIP</h1>
			<h2>Cagayan de Oro City</h2>
		  </div>
		</div>

		<div class="mySlides fade">
		  <img src="images/a2.jpg" style="width:1350px; height: 320px">
		  <div class="text">
		  	<h1>THE CITY OF GOLDEN FRIENDSHIP</h1>
			<h2>Cagayan de Oro City</h2>
		  </div>
		</div>

		<div class="mySlides fade">
		  <img src="images/a3.jpg" style="width:1350px; height: 320px">
		  <div class="text">
		  	<h1>THE CITY OF GOLDEN FRIENDSHIP</h1>
			<h2>Cagayan de Oro City</h2>
		  </div>
		</div>

		<div class="mySlides fade">
		  <img src="images/a4.jpg" style="width:1350px; height: 320px">
		  <div class="text">
		  	<h1>THE CITY OF GOLDEN FRIENDSHIP</h1>
			<h2>Cagayan de Oro City</h2>
		  </div>
		</div>

		<div class="mySlides fade">
		  <img src="images/a5.jpg" style="width:1350px; height: 320px">
		  <div class="text">
		  	<h1>THE CITY OF GOLDEN FRIENDSHIP</h1>
			<h2>Cagayan de Oro City</h2>
		  </div>
		</div>
	</div>

<!-- BODY -->
	<div class="content">
	  <h1>&nbsp; About Cagayan de Oro City</h1>
	  <div class="w3-row" style="padding-left: 10px">
		  
	  	  <p class="w3-border w3-padding-large w3-padding-32 w3-left" style="text-align: justify; width: 70%">Cagayan de Oro, abbreviated CDO, CDOC, CdeO is the capital city of Misamis Oriental and is located at the north central of Mindanao hence, it is one of the gateways to Mindanao. Cagayan de Oro is known as "The City of Golden Friendship" because of the warm welcoming smiles and the utmost hospitality of the locals, and the city had a tagline of "Cagayan de Oro - The adventure never ends" for the reason that the city has a lot of activities to offer for you: ranging from historical landmarks churches and museums seems to discover the rich history of Cagayan de Oro; great deal of beaches, rivers, and water parks the splash around, naming the famous White Water Rafting that gave the city the title of "White Water Rafting Capital of the Philippines.</p>

<!-- VIDEO -->
		  <div class="w3-col" style="width:30%; padding-top: 65px; text-align: center;">
			  <video width="370" height="210" controls>
			    <source src="video/Cagayan de Oro Central Business District Dusk to Dark 4K.mp4" type="video/mp4">
			  </video>
<!-- BUTTON -->
			   <p style="font-size: 13px">
		  	<button onclick="document.location='History.php'">Click here to read more about CDO</button>
		 </p>
		  </div>

	</div>
	


<!-- FLEXBOX -->

	<p style="text-align: center; font-size: 40px; font-family: 'Brush Script MT', cursive;">
		Popular Destinations
	</p>
	<div class="row">
	  <div class="column">
	    <img class="shake" src="images/SevenSeas.jpg" width="200" height="200">
	    <a href="https://www.google.com/maps/place/Seven+Seas+Waterpark+and+Resort/@8.5186813,124.6067392,17z/data=!3m1!4b1!4m5!3m4!1s0x32fff39ac72a5d91:0xd6d7ff12d58b259f!8m2!3d8.5186813!4d124.6089279?hl=en">
	    	<p style="text-align: center; font-size: 15px; padding-right: 18px">Seven Seas WaterPark and Resort</p></a>
	  </div>

	  <div class="column">
	    <img class="shake" src="images/Cathedral.jpg" alt="Cathedral" width="200" height="200">
	    <a href="https://www.google.com/maps/place/St.+Augustine+Metropolitan+Cathedral,+Archdiocese+of+Cagayan+de+Oro/@8.4751552,124.6396493,17.25z/data=!4m5!3m4!1s0x32fff2d5ff8e306d:0xfe79a747cce83ffa!8m2!3d8.4751535!4d124.6414556?hl=en">
	    	<p style="text-align: center; font-size: 15px; padding-right: 18px">St. Augustine Metropolitan Cathedral</p></a>
	  </div>

	  <div class="column">
	    <img class="shake" src="images/Mapawa.jpg" alt="Mapawa Nature Park" width="200" height="200">
	    <a href="https://www.google.com/maps/place/Mapawa+Nature+Adventure+Park/@8.4766484,124.6329922,17z/data=!3m1!4b1!4m5!3m4!1s0x32fff32eb780a4e9:0x117809a001a42833!8m2!3d8.4766484!4d124.6351809?hl=en">
	    	<p style="text-align: center; font-size: 15px; padding-right: 18px">Mapawa Nature Park</p></a>
	  </div>

	  <div class="column">
	    <img class="shake" src="images/WaterRafting.jpg" alt="White Water Rafting" width="200" height="200">
	    <a href="https://www.google.com/maps/dir/8.3673594,124.5528275/CDO+White+Water+Rafting+Cagayan+de+Oro/@8.3051258,124.5941727,17.25z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x32ff86757a34a90d:0x91d3c6b38fa98df2!2m2!1d124.5966114!2d8.3051624">
	    	<p style="text-align: center; font-size: 15px; padding-right: 18px"> White Water Rafting </p></a>
	  </div>

	  <div class="column">
	    <img class="shake" src="images/HighRidge.jpg" alt="High Ridge" width="200" height="200">
	    <a href="https://www.google.com/maps/search/high+ridge+cagayan+de+oro/@8.4623608,124.6471989,18.5z?hl=en">
	    	<p style="text-align: center; font-size: 15px; padding-right: 18px">High Ridge</p></a>
	  </div>

	  <div class="column">
	    <img class="shake" src="images/EcoVillage.jpeg" alt="Eco Village Park" width="200" height="200">
	    <a href="https://www.google.com/maps/place/Gardens+of+Malasag+Eco-Tourism+Village/@8.4583258,124.6976307,17z/data=!3m1!4b1!4m5!3m4!1s0x32ff92b1091a7339:0x881d3f873e39268d!8m2!3d8.4583258!4d124.6998194?hl=en">
	    	<p style="text-align: center; font-size: 15px; padding-right: 18px">Gardens of Malasag Eco-Tourism Village</p></a>
	  </div>

	</div>
<br>

	<p style="text-align: center; font-size: 15px;">
		<a href="SeeMore.php"> See more </a>
	</p>
	
<br><br><br><br>

<!-- FOOTER -->
	<footer>
	    <div class="w3-container w3-theme-l1 w3-padding-32">
	      <p style="font-size: 12px">
	      Follow Palse Tourism for more inspiration.</p>
	      <p style="font-size: 12px">
	      	<a href="#"> @PalseTourism </a></p>
	      <p style="font-size: 12px">
	      	<a href="www.facebook/PalseTourism">
	      		<img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo-500x350.png" width="38" height="35"></a>
	      	<a href="www.instagram/PalseTourism">
	      		<img src="http://clipart-library.com/images_k/instagram-png-transparent/instagram-png-transparent-1.png" width="35" height="35"></a>
	      	<a href="www.pinterest/PalseTourism">
	      		<img src="http://pngimg.com/uploads/pinterest/pinterest_PNG62.png" width="48" height="35"></a>
	      	</p>
	      	<img src="images/Logo.png" width="115" height="85">
	      <p style="font-size: 12px"> Learn more <a href="About-Us.php">about us. </a></p>
	      <p style="font-size: 12px"> © All Rights Reserved | <a href="TermsAndCondition.php">Terms of Service </a>| <a href="Privacy.php">Privacy Policy </a></p>
	    </div>
	</footer>

<!-- Sidebar -->
	<div id="mySidebar" class="sidebar">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
	  <a href="About-Us.php"> About Us </a>
	  <a href="TermsAndCondition.php">Terms of Service</a>
	  <a href="Privacy.php">Privacy Policy</a>
	  <a href="Contact.php">Contact</a>
	  <a href="logout.php"">Logout</a>
	</div>

<!-- Navbar -->	
	<div id="main"> 
	  <div class="w3-top">
	    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
	      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">
	        <button class="openbtn" onclick="openNav()">☰</button> </a>
	      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><img src="images/Logo.png" width="40" height="25"></a>
	      <a href="HomePage.php" class="w3-bar-item w3-button w3-theme-l1">Home</a>
	      <a href="News.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a>
	      <a href="Contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
	      <a href="About-Us.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
	      <a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Admin</a>
	      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo  $_SESSION['username']?></a>
	      <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
	    

	      
</div>

	    </div>

	  </div>
	
	<script>
/* SIDEBAR */
	function openNav() {
	  document.getElementById("mySidebar").style.width = "250px";
	  document.getElementById("main").style.marginLeft = "250px";
	}
	function closeNav() {
	  document.getElementById("mySidebar").style.width = "0";
	  document.getElementById("main").style.marginLeft= "0";
	}
	

/* SLIDESHOW */
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}
	  slides[slideIndex-1].style.display = "block";
	  setTimeout(showSlides, 2000); // Change image every 2 seconds
	}

/* READ MORE/LESS BUTTON */
	function readmore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

</script>

</body>
</html>
