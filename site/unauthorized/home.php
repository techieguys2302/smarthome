<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="../../css/home.css">
</head>
<body class="home">

<!--<section>-->
<!-- <div class="bgimage"></div>-->
<div class="menu" >
<div class="leftmenu">
<!--<img class="icon" src="../../images/icon.png" />-->
<h4><a href="/smarthome/site/unauthorized/home.php" class="homeicon"><img class="icon" src="../../images/icon.png" />&nbsp;&nbsp;<label class="domisep">DOMISEP</label> <label class="smart">SMART-HOME</label></a></h4>
</div>


<div class="rightmenu">

<button id="buttonone" onclick="login()"> LOGIN </button>
<button id="buttontwo" onclick="register()"> REGISTER </button>
</div>
</div>
<div class="slideshow-container" >
<div class="mySlides fade">
  <img src="../../images/banner1.jpg">
</div>

<div class="mySlides fade">
  <img src="../../images/banner3.jpg">

</div>

<!--<div class="mySlides fade">
  <img src="../../images/smarthome3.jpg" border="2px">

</div>-->

<div class="mySlides fade">
  <img src="../../images/banner4.png">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!--</section>-->

<!-- sensor Description -->
<div class="discription">
 <div class="sensor description">
 <h1 class="sensors">SENSORS</h1>
  
  <h2 style="color:grey !important;"><i>Makes Life Easy</i></h2>
  
  <p class="main">Sensors are the eyes, ears, and maybe even the taste buds for the smart home. It's not about putting a speaker in a chair or putting a TV in a bed. That's not how technology and the home intersect. For us, it's about sensors, about the home knowing where you are. The mission of our service is to serve our customers with the highest level of customer satisfaction, providing price competitive products developed and delivered on time by our innovative, talented, dedicated and empowered workforce. Sensors are designed to smartify lives by enabling things to see, hear, feel and understand their environment. Best-in-class accuracy and measurement precision enable customers to build more intelligence into their designs, and create new, innovative sensors that truly understand their environment.
  Our technology leadership makes us the partner of choice for customers looking to combine continuous innovation with technology excellence.</p>
<br/>
  </div>

<!-- multiple sensors -->
  <div class="img1">
  
    <h2 class="sensorheading1">TEMPERATURE</h2>
	
	<img src="../../images/smrt7.jpeg" align="right;" width="40%" height="250px" style="float:left; margin-left: 50px; margin-right:40px; margin-top: 10px; border: solid grey 1px; padding: 2px"/>
    
	<p class="sensordiscription1" style="margin-top:50px"><h3>AUTO SCHEDULE:</h3>Schedule your smart thermostat setting to help save on energy costs when you’re not home.<h3>REMOTE CONTROLE:</h3>
Use the ADT Pulse® app to control your smart thermostat with your mobile devices.<h3>CUSTOM ALERTS:</h3>Set up custom smart thermostat notifications to alert you if your home is too cold or too warm.</p>
 
 </div>
  
  
  
  <div class="img2">
  
    <h2 class="sensorheading2" style="padding-top:20px;">LIGHT</h2>
	
    <img src="../../images/smrt8.jpeg" align="left" width="40%" height="250px" style=" float:right;  margin-right:40px; margin-left:40px;  margin-bottom: 20px;  margin-top: 0px; border: solid black 1px; padding: 3px">
   
   <p class="sensordiscription2" style="margin-top:100px; margin-left:100px">Control lights to turn on/off at certain times from anywhere in the world using a standard web browser. You can control or monitor lights from anywhere!</p>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/>
  </div>
  
  
  
  <div class="img3">
    
	<h2 class="sensorheading3">ENERGY CONSUMPTION</h2>
    
	<img src="../../images/energyconsumption.png"  align="right;" width="40%" height="250px" style="float:left; margin-left: 50px; margin-right:40px; margin-top: 0px; border: solid grey 1px; padding: 2px"/>
   
   <p class="sensordiscription3"  style="margin-top:100px">HomeControls solution should enable consumers to easily monitor and control light, temperature, energy consumption, and electrical devices through the website. This leads to reduced energy consumption and energy savings, as much as up to 30 %, while still maintaining a high level of comfort. HomeControl also works on increasing safety through home automation systems.</p>
 
  </div>
  
  <div class="img4">
  
    <h2 class="sensorheading4" style="padding-top:20px;">WATER HEATER</h2>
	
    <img src="../../images/smrt16.jpg" align="left" width="40%" height="250px" style=" float:right;  margin-right:40px; margin-left:40px;  margin-bottom: 20px;  margin-top: 10px; border: solid black 1px; padding: 3px">
   
   <p class="sensordiscription4" style="margin-top:90px; margin-left:200px">Water Heater controller brings your electric or gas water heater out of the basement and into the palm of your hand to heat water only when you need it. It offers cost savings, and intelligent controls.</p>
   <br/> <br/>
   <br/><br/>
   <br/> <br/>
   <br/> <br/>
  <br/>
  </div>
  
  
  <div>
  
  </div>
  
  
  </div>
<?php
  include("../core/footer.php");
?>


<script>
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
  
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}

function login(){
	window.location.href= "/smarthome/site/unauthorized/login.php";
}


function register(){
	window.location.href= "/smarthome/site/unauthorized/registration.php";
}
</script>

</body>
</html>