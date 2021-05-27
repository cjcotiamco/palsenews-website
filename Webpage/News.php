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

/* Read more/less Button */
.more{
   display: none;
}
.post{
   color: #000000;
   font-size: 18px;
   text-align: justify;
   line-height: 25px;
   font-family: 'Work Sans',sans-serif;
}
.post:not(:last-child){
   margin-bottom: 70px;
}
button{
   margin-top: 15px;
   display: block;
   border:none;
   outline: none;
   padding: 8px 20px;
   text-transform: capitalize;
   cursor: pointer;
   font-size: 20px;
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

<!-- BODY -->
  <div class="content">
    <div class="w3-twothird w3-container">
    <h1>News</h1>
    <p class="w3-border w3-padding-large w3-padding-32 w3-left" style="text-align: justify;">
     More Covid-19 vaccines expected to arrive in Oro
<br><br>
      CAGAYAN de Oro City Mayor Oscar Moreno said Friday, March 19, that they are expecting more Covid-19 vaccines to be delivered to the city. This, amid reports of President Rodrigo Duterte agreeing to Health Secretary Francisco Duque III and vaccine czar Carlito Galvez Jr.'s recommendation on using up all the 525,000 doses of AstraZeneca vaccines to cover more frontline healthcare workers. "We should expect more vaccines coming. Katong pang second dose, i-deliver na na nila soon. There will be more vaccinations hopefully that will take place," Moreno said. Moreno also reiterated his position that the government should optimize the allocation of all available vaccines to more medical frontliners. According to Dr. Ted Yu of the City Health Office, Northern Mindanao received a total of 19,700 doses of Sinovac and AstraZeneca vaccines, of which 33.28 percent or 6,577 doses were allocated to Cagayan de Oro. Moreno was optimistic that at the rate the city is going, he said they might begin the vaccination rollout for senior citizens after 10 days, adding that in more than one week, the city has vaccinated more than 6,000 medical frontliners. As of Thursday, March 18, a total of 6,513 frontline healthcare workers in Cagayan de Oro have received their first dose of Covid-19 vaccine. The city is aiming to vaccinate around 10,000 healthcare workers. Acting City Health Officer Dr. Lorraine Nery, for her part, said that simulation exercises were conducted at Barangays Gusa and Bulua on Friday, March 19, in preparation for the coming vaccination rollout for senior citizens and other priority groups. "Nag program na ta nga by next week mahimo naa pud tay ma-simulate na other areas," Nery said. Nery also mentioned that during the simulation exercises, the city's logistics team noticed some concerns, particular in terms of manpower. "Hopefully mahuman nato og simulate ang atong 15 ka mga vaccination sites na gi-prepare," Nery said. *article courtesy of SunStar Cagayan De Oro*</p>
    </div>

    <div style="text-align: center; padding-top: 100px">
      <img src="images/CovidVaccine.jpg" width="300" height="300">
    </div>

    <div class="w3-twothird w3-container">
    <p class="w3-border w3-padding-large w3-padding-32 w3-left" style="text-align: justify;">
     Oro registers 14 new Covid-19 cases, 7 recoveries
<br><br>
      CAGAYAN de Oro has recorded 14 new coronavirus disease (Covid-19) cases as of March 18, Acting City Health Officer Dr. Lorraine Nery said. The total number of confirmed coronavirus infections in the city is now at 3,985. According to Nery, of the 14 new cases, two are persons deprived of liberty (PDLs), four are local cases with link, seven are local index cases, and one local authorized person outside residence (Apor). Of the 3,985 total Covid-19 cases in the city, 423 are under the returning overseas Filipino workers/locally stranded individuals (ROFs/LSIs) category and 3,562 cases are local transmissions. Nery said the 3,562 local cases consist of 189 persons deprived of liberty (PDL), 1,913 local index cases and 1,459 local cases with link. Cagayan de Oro has recorded 156 active cases, 49 of whom are admitted to the Northern Mindanao Medical Center and other hospitals in the city, 106 are outpatients, and one ROF. The city also registered seven new coronavirus-positive persons who are now tagged as "recovered," bringing the total number of recoveries in Cagayan de Oro to 3,639, with a recovery rate of 91.31 percent. Of the figure, 302 are LSIs, 119 are ROFs, and 3,218 are local cases (community: 2,718; Apors: 500). The number of Covid-19 deaths in the city is at 190. *article courtesy of SunStar Cagayan De Oro*</p>
    </div>

    <div style="text-align: center; padding-top: 700px">
      <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/EAD2/production/_114241106_vaccineillus976_rtrs.jpg" width="300" height="300">
    </div>

    <div class="w3-twothird w3-container">
    <p class="w3-border w3-padding-large w3-padding-32 w3-left" style="text-align: justify;">
     Iligan’s sole infectious disease specialist receives first COVID-19 vaccine jab
<br><br>
      ILIGAN CITY--Dr. Leonell Albert Quitos, the city’s sole infectious disease specialist, received the first authorized COVID-19 vaccine dose in Iligan Monday morning, March 8. Quitos volunteered to take the first coronavirus shot to show the public that the vaccine is safe. “During vaccination, wala gyud koy na feel. Gamay ang dagom og maayo ang handling ug pag administer sa nurse,”he said [During vaccination, I didn’t feel anything, The needle was small and the nurse handled and administered it well.] In response to those expressing apprehensions about getting an anti-COVID shot, the infectious disease specialist assured that he did not feel any side effects after the vaccination. “Dili ta mahadlok sa pagpabakuna kay kini nga pagpabakuna kay dugang nga layer of protection sa atoa. Aside sa minimum health standards sama sa wearing of mask og face shields, social distancing, paghugas sa kamot, kining pagpabakuna another ni nga layer of protection sa ato-a nga tanan,” he further said. [We should not be afraid to get vaccinated because this vaccination is an additional layer of protection for us. Aside from our minimum health standards such as wearing a mask and face shields, social distancing, and handwashing, this vaccination is another layer of protection for all of us. Moreover, Quitos urged other frontliners to follow suit and get vaccinated. “Akong panawagan sa akong mga kauban nga frontliners, magpabakuna ta para protektado dili lang ang inyong kaugalingon pati na pud ang inyong mga pamilya o ang mga tawong kauban ninyo tanan,” he said. [I call on my fellow frontliners to get vaccinated to protect not only yourself but also your families or the people around you.] The first batch of the vaccine rollout in the city is held simultaneously at the Adventist Medical Center Iligan and DoñaJuana A. Lluch Memorial Central School starting today until Wednesday, March 10. (APB/PIA-ICIC) <br>*article courtesy of Mindanao Daily*</p>
    </div>

    <div style="text-align: center; padding-top: 400px">
      <img src="https://www.mindanaodailynews.com/images/news/1615227042_1.jpg" width="420" height="320">
    </div>

  </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
        <a href="#" class="w3-bar-item w3-button w3-hide-small  w3-hover-white">
          <button class="openbtn" onclick="openNav()">☰</button> </a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><img src="images/Logo.png" width="40" height="25"></a>
        <a href="HomePage.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
        <a href="News.php" class="w3-bar-item w3-button w3-theme-l1">News</a>
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


  </script>
  
</body>
</html>