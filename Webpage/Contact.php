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
  /* BODY */
  body {
      font-family: Arial;
      font-size: 20px;
      margin: 0;
  }
  
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
    padding:20px;
    font-size: 20px;
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
    <div class="w3-twothird w3-container">
    <h1>Contact</h1>
    <p class="w3-border w3-padding-large w3-padding-32 w3-left" style="text-align: justify;">
      Address:<br>
      &nbsp;&nbsp;  2nd Floor, ABC Building, CM Recto Ave., Cagayan de Oro City <br><br>
      Phone Number: <br>
      &nbsp;&nbsp;  +639-8765-4321 <br><br>
      Telephone Number:<br>
      &nbsp;&nbsp;  854-1234 <br><br>
      Email Address: <br>
      &nbsp;&nbsp;  palsetourism@businessmail.com <br>
    </p>
    </div>

    <div style="text-align: center; padding-top: 100px; padding-right: 120px">
      <img src="https://softtechnologies.in/wp-content/uploads/2020/06/bad-sales.png" width="300" height="300">
    </div>

  </div>

<br><br><br><br><br>

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
    <a href="logout.php">Logout</a>
  </div>

<!-- Navbar --> 
  <div id="main"> 
    <div class="w3-top">
      <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">
          <button class="openbtn" onclick="openNav()">☰</button> </a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><img src="images/Logo.png" width="40" height="25"></a>
        <a href="HomePage.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
        <a href="News.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a>
        <a href="Contact.php" class="w3-bar-item w3-button w3-theme-l1">Contact</a>
        <a href="About-Us.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
         <a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Admin</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
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