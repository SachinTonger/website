
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCM CONNECT</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php" title="Logo">
                    <img src="image/mcm-logo.png" alt="MCM LOGO" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About Us</a>
                    </li>
                    <li>
                    <div class="dropdown">
                    <button class="dropbtn">Services & Specialization</button>
                    <div class="dropdown-content">
                     <a href="scntobim.php">Scan to BIM</a>
                      <a href="bsi.php">BIM Service & Impletentation</a>
                       <a href="CAD.php">CAD Drafting & Detailing</a>
                       <a href="interior.php">Interior Design Documentation</a>
                      <a href="3d.php">3D Visualisation</a>
                       <a href="qs.php">QS Estimation</a>
                       <a href="account_service.php">Accounting Service</a>
                           </div>
                    </div>
                    </li>
                    <li>
                        <a href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
<!-- Navbar Section Ends Here -->
    

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/index.jpg" style="width:100%; height:580px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/index1.jpg" style="width:100%; height:580px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/index2.jpg" style="width:100%; height:580px">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
 
    

    
    


<!-- crousal Section Ends Here -->

<div class="parallax-again-2"></div>

<div class="para">
    <h1 style=" margin: 20px;text-align:center;color: #ff4757;font-family: 'Times New Roman', serif;"> Prime Advantages <h1>
</div>



<!-- Heading Section Ends Here -->


<div class="row">
 
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2 >Cost and Time</h2>
    </div>
    <div class="flip-box-back">
      <p>SKETS offers cost-effective services to clients along with the best value. Clients effectively save 35-40% on cost as compared to in-house production.</p>
    </div>
  </div>
</div>
  
  
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>Experiance</h2>
    </div>
    <div class="flip-box-back">
      <p>The Studio has completed over 1500 large scale projects along with 14,000+ Retail roll-outs across 32 countries over the past 17 years.</p>
    </div>
  </div>
</div>
  
  
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>Flexibility</h2>
    </div>
    <div class="flip-box-back">
      <p>585+ architects, engineers & designers provide the organization, flexibility of ramping team up/down based on project requirements</p>
    </div>
  </div>
</div>
  
  
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>BIM Expertise</h2>
    </div>
    <div class="flip-box-back">
      <p>SKETS studio was one of the early adopters of BIM. The team has completed over 400 projects in BIM in Interiors, Architecture & Engineering.</p>
    </div>
  </div>
</div>



<!-- First Flip Section Ends Here -->





<div class="row">
 
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2 style="text-align:center">Standard</h2>
      
    </div>
    <div class="flip-box-back">
      <p>The SKETS team is able to produce sets in accordance with AIA and RIBA standards. The sets can be produced both in metric and imperial units.</p>
    </div>
  </div>
</div>
  
  
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>INFRASTUCTURE</h2>
    </div>
    <div class="flip-box-back">
      <p>The Organization is equipped with state-of-the-art IT infrastructure with Data Integrity & Security, Global Connectivity, latest Hardware/Software, Cloud & Remote connectivity.</p>
    </div>
  </div>
</div>
  
  
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>PROCESS EXCELENCE</h2>
    </div>
    <div class="flip-box-back">
      <p>ISO 9001:2015 certified processes deliver unmatched business value through process excellence & quality frameworks.</p>
    </div>
  </div>
</div>
  
  
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>REPEAT CLIENTELE</h2>
    </div>
    <div class="flip-box-back">
      <p>SKETS focuses on surpassing client expectations and building long-term relationships. This is reflected in the fact that SKETS now has a near-100% client retention rate.</p>
    </div>
  </div>
</div>
</div>
<!-- Second Flip Section Ends Here -->



<div class="para">
    <p style=" margin: 20px;text-align:center;color: white;font-family: Calibri;">s </p>
</div>

<div class="parallax"></div>


<div class="about">
<h1 style=" margin: 20px;text-align:center;color: #ff4757;font-family: 'Times New Roman', serif;"> About MCM Connect <h1>
    <h4 style="margin:80px; text-align:center;font-style:italic;font-weight:lighter">MCM Connect is born out the need to melt the boundaries of getting 
    international quality services at affordable cost to a crippling industry due to lack of skilled manpower<br> and challenges of 
    a global reach which can be trustworthy and transparent.

Conor McManus realised the<br> need to bring global talent to feed the industry needs to make them profitable 
and sustainable. The firm was<br> designed to be based on process and systems that operate on collaboration, tr
ansparency, and mutual growth. MCM Connect would provide<br> scalable services for Building Information Modelli
ng (BIM) solutions to Architecture, Engineering & Construction (AEC) firms.</h4>
</div>





<!-- Vedio Section starts Here -->




<!-- vedio section ends here -->



<!-- Prime advantage section starts here-->









<div class="parallax-again"></div>

<div class="client">
  <h1 style=" margin: 20px;text-align:center;color: #ff4757;font-family: 'Times New Roman', serif;">Prime Advantages </h1>
</div>


<div class="row-1">
  <div class="imagebox">
    <img src="image/index.jpg" alt="Avatar"      class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/index1.jpg" alt="Avatar"    class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/index2.jpg" alt="Avatar"  class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>
</div>

<div class="row-1">
  <div class="imagebox">
    <img src="image/3dimension.jpg" alt="Avatar"      class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/brawery.jpg" alt="Avatar"    class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/courtyard.jpg" alt="Avatar"  class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>
</div>



<!-- testomonials section starts here-->


<p style="color:white">.*</p>


<div class="parallax-again-testomonial"></div>



<!-- contact section starts from here. -->

<div class="contact" style=" background-color: white">
  <div class="left-form">
    <h1 style="text-align:center;font-family: 'Times New Roman', serif;"><strong>Contact Us</strong> </h1>
    <h5 style="text-align:center; margin:15px;font-style:italic;font-weight:lighter"> UNIT 250-252, JMD EMPIRE<br>
             SEC-62, GURUGRAM<br>
                HR, INDIA<br>
                   122021
    </h5>
    <h1 style="text-align:center;font-family: 'Times New Roman', serif;"><strong>Reach Us</strong> </h1>
    <h3 style="text-align:center" ><a  href="mailto:info@mcmconnect.com">info@mcmconnect.com</a></h3>

  </div>
  <div class="left-form">
    <h3><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.305112057318!2d77.0751107150039!3d28.410048982505987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d226c8fd4fb5b%3A0xe56d422978da1086!2sJMD%20Empire!5e0!3m2!1sen!2sin!4v1677147180322!5m2!1sen!2sin" width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h3>
  </div>
</div>



<hr>

<!-- footer section starts here -->



<?php
include('footer.php');
?>