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

  div.desc {
    padding: 15px;
    text-align: center;
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

<br> <br>

<!-- BODY -->
  <div class="w3-row-padding">

    <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/Eden.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Eden's+Solace/@8.4434754,124.6535745,17z/data=!4m12!1m6!3m5!1s0x32ff8d108a0a49d3:0x95a98f9e187bbc5f!2sEden's+Solace!8m2!3d8.4434754!4d124.6535745!3m4!1s0x32ff8d108a0a49d3:0x95a98f9e187bbc5f!8m2!3d8.4434754!4d124.6535745?hl=en">Eden's Solace</a>
      </div>
    </div>

    <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/CUMuseum.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Capitol+University+Museum+of+Three+Cultures/@8.4884849,124.6499998,17z/data=!3m1!4b1!4m5!3m4!1s0x32fff2e7ff6d2ec9:0xc1ae50abf597feb0!8m2!3d8.4884849!4d124.6521885?hl=en">Capitol University Museum of Three Cultures </a>
      </div>
    </div>

    <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/Macahambus.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Macahambus+Cave/@8.3788188,124.6076488,17z/data=!3m1!4b1!4m5!3m4!1s0x32ff8ec7bed45465:0x1d28ccf2ecea203a!8m2!3d8.3788188!4d124.6098375?hl=en"> Macahambus Cave </a>
      </div>
    </div>

    <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/XUMuseum.jpg" style="width:300px; height: 200px;cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Museo+de+Oro/@8.4758532,124.644593,17.5z/data=!4m5!3m4!1s0x32fff2d6c1374f85:0x271b103ec584ba23!8m2!3d8.4758781!4d124.6459584?hl=en">Museo de Oro</a>
      </div>
    </div>
</div>
<div class="w3-row-padding">
   <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/Vicente.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Vicente+de+Lara+Park/@8.4852347,124.6459565,17z/data=!3m1!4b1!4m5!3m4!1s0x32fff2dc3a5dc351:0x4d8110bef3734e5b!8m2!3d8.4852347!4d124.6481452?hl=en">Vicente de Lara Park</a>
      </div>
   </div>

   <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/SportsCenter.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Pelaez+Sports+Center/@8.4820766,124.6439565,17z/data=!3m1!4b1!4m5!3m4!1s0x32fff2d97e599b7b:0xa1a19784881a90e3!8m2!3d8.4820766!4d124.6461452?hl=en">Pelaez Sports Center</a>
      </div>
    </div>

   <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/DivineMercy.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Archdiocesan+Shrine+of+the+Divine+Mercy/@8.5477726,124.5275525,15z/data=!4m5!3m4!1s0x0:0xb7485422fad0905c!8m2!3d8.5477726!4d124.5275525">Archdiocesan Shrine of the Divine Mercy</a>
      </div>
    </div>

   <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/Amaya.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Amaya+View/@8.4229416,124.6547017,17z/data=!3m1!4b1!4m5!3m4!1s0x32ff8da4b96dbe4b:0x292a68ffb3dd2011!8m2!3d8.4229416!4d124.6568904">Amaya View</a>
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
   <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/GastonPark.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Gaston+Park/@8.4754742,124.6399422,17z/data=!3m1!4b1!4m5!3m4!1s0x32fff2d60528195b:0xe6c7b388e0e10e91!8m2!3d8.4754742!4d124.6421309">Gaston Park</a>
      </div>
    </div>

    <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/PlazaDivisoria.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Plaza+Divisoria/@8.4776963,124.6419735,17.25z/data=!4m5!3m4!1s0x32fff2d7a5a7d4cd:0x2d93d1ca9953b45d!8m2!3d8.4777166!4d124.6438054">Plaza Divisoria</a>
      </div>
    </div>

    <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/UltraWinds.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Ultra+Winds+Mountain+Resort/@8.416065,124.6430173,17z/data=!3m1!4b1!4m8!3m7!1s0x32ff8db44d80fe71:0x78473467178146dd!5m2!4m1!1i2!8m2!3d8.416065!4d124.645206">Ultra Winds Mountain Resort</a>
      </div>
    </div>

    <div class="w3-col w3-container w3-quarter" style="width:25%;">
      <img src="images/Dahilayan.jpg" style="width:300px; height: 200px; cursor:pointer" 
      onclick="onClick(this)" class="w3-hover-opacity">
      <div class="desc">
        <a href="https://www.google.com/maps/place/Dahilayan+Adventure+Park/@8.2058888,124.8553008,17z/data=!3m1!4b1!4m8!3m7!1s0x32ff9f60c85c2e0f:0x71718b0e3e40309c!5m2!4m1!1i2!8m2!3d8.2058888!4d124.8574895">Dahilayan Adventure Park</a>
      </div>
    </div>

  </div>

  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-padding-top-48 w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img id="img01" style="width:100%">
    </div>
  </div>

  </div>

<br><br><br>

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
        <a href="Contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
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



<!-- Modal -->
  <script>
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
  }
  </script>

</body>
</html>