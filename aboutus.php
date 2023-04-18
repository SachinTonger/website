<?php
include('header.php');
?>


<!DOCTYPE html>
<html>
<head>
<style>
.imagecontainer {

  text-align: center;
  color: white;
 
  
}
.centered {
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-weight:800;
}
/* css for counter */

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  
}

.wrapper {
  position: absolute;
  width: 80vw;
  transform: translate(-50%, 80%);
  top: 50%;
  left: 50%;
  display: flex;
  justify-content: space-around;
  gap: 10px;
}
.counter {
  width: 28vmin;
  height: 28vmin;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 1em 0;
  position: relative;
  font-size: 16px;
  border-radius: 0.5em;
  background-color: #21242b;
  border-bottom: 10px solid red;
}
i {
  color: #18f98f;
  font-size: 2.5em;
  text-align: center;
}
span.num {
  color: #ffffff;
  display: grid;
  place-items: center;
  font-weight: 600;
  font-size: 3em;
}
span.text {
  color: #e0e0e0;
  font-size: 1em;
  text-align: center;
  pad: 0.7em 0;
  font-weight: 400;
  line-height: 0;
}
@media screen and (max-width: 1024px) {
  .wrapper {
    width: 85vw;
  }
  .counter {
    height: 26vmin;
    width: 26vmin;
    font-size: 12px;
  }
}
@media screen and (max-width: 768px) {
  .wrapper {
    width: 90vw;
    flex-wrap: wrap;
    gap: 30px;
  }
  .counter {
    width: calc(50% - 40px);
    height: 30vmin;
    font-size: 14px;
  }
}
@media screen and (max-width: 480px) {
  .wrapper {
    gap: 15px;
  }
  .counter {
    width: 100%;
    height: 25vmin;
    font-size: 8px;
  }
}

/* css for the counter ends here */
.dpara{
margin:20px;
text-align:center;
font-family: Garamond, serif;
font-style: italic;
font-weight:100;
padding:50px;
margin-top:50px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  float:left;
  
  margin:100px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
  
}

.team-member:after {
  content: "";
  display: table;
  clear: both;
  text-align:center;
}

/* css for the slide starts here */

h1 {
      text-align: center;
   }
   * {
      box-sizing: border-box;
   }
   .Slide {
      display: none;
   }
   
   .slideContainer {
      max-width: 600px;
      margin: 10px;
      position: relative;
      margin: auto;
   }
   .prevBtn, .nextBtn {
      position: absolute;
      top: 50%;
      width: auto;
      padding: 10px;
      background-color: rgb(255, 255, 75);
      color: rgb(50, 0, 116);
      font-weight: bolder;
      font-size: 18px;
   }
   .nextBtn {
      right: -40px;
   }
   .prevBtn {
      left: -40px;
   }
   .Caption {
      color: #500070;
      font-weight: bold;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      font-size: 25px;
      padding: 8px 12px;
      position: absolute;
      width: 100%;
      text-align: center;
   }
   .Navdot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: rgb(54, 5, 117);
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
      display: inline-block;
      margin-top: 30px;
   }
   .selected, .Navdot:hover {
      background-color: #d9ff00;
   }
   @media only screen and (max-width: 450px) {
      .prevBtn, .nextBtn, .Caption {
         font-size: 16px;
      }
   }


/* css for the gallery */

.first.gallery:after {
  content: "";
  display: table;
  clear: both;
}


.first-box {
  float: left;
  width: 47%;
  padding: 10px;
  height: 300px;
 margin:20px;
 box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  
 
}


.first-box:hover{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}





/* css for the slides end here */



.progress-bar {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
  margin-top:50px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}




/* css for the progress bars end here. */






</style>
</head>
<body>
<div class="imagecontainer">
<img src="image/about.jpg" alt="Paris" width="100%" height="600">
<div class="centered">
    <h1>About Us</h1>
</div>
</div>

<div class="wrapper">
      <div class="counter">
        <i class="fas fa-utensils"></i>
        <span class="num" data-val="400">000</span>
        <span class="text">Project Delivered</span>
      </div>
      <div class="counter">
        <i class="fas fa-smile-beam"></i>
        <span class="num" data-val="100">000</span>
        <span class="text">MCM's Team</span>
      </div>
      <div class="counter">
        <i class=""></i>
        <span class="num" data-val="10">000</span>
        <span class="text">Year of Experiance</span>
      </div>
      <div class="counter">
        <i class=""></i>
        <span class="num" data-val="5"><h1></h1>000</span>
        <span class="text">Core Services</span>
      </div>
    </div>
    <script>
    let valueDisplays = document.querySelectorAll(".num");
let interval = 1000;
valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
</script>

<div class="dpara">
    <p> MCM Connect is born out the need to melt the boundaries of getting international quality services at affordable cost to a crippling industry due to lack of skilled manpower
and challenges of a global reach which can be trustworthy and transparent.<br><br> Conor McManus realised the
need to bring global talent to feed the industry needs to make them profitable and sustainable.<br><br> The firm was
designed to be based on process and systems that operate on collaboration, tr ansparency, and mutual growth. MCM Connect would provide
scalable services for Building Information Modelli ng (BIM) solutions to Architecture, Engineering & Construction (AEC) firms.
<br><br><br><br>
</p>
</div>

<h1 style="text-align:center; margin-top:-80px; color:red"> Our Team </h1>
<div class="team">
    
    
<div class="team-member">
<div class="card">
  <img src="image/tonger.jpg" alt="Avatar" style="width:100%; height:200px">
  <div class="container">
    <h4><b>Sachin Tonger</b></h4> 
    <p>Web Technologist</p> 
  </div>
</div>
<div class="team-member">
<div class="card">
  <img src="image/tonger.jpg" alt="Avatar" style="width:100%; height:200px">
  <div class="container">
    <h4><b>Pawan</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
<div class="team-member">
<div class="card">
  <img src="image/tonger.jpg" alt="Avatar" style="width:100%; height:200px">
  <div class="container">
    <h4><b>Preet Singh</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>
<div class="card">
  <img src="image/tonger.jpg" alt="Avatar" style="width:100%; height:200px">
  <div class="container">
    <h4><b>Jagjeet Singh</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
<div class="team-member">
<div class="card">
  <img src="image/tonger.jpg" alt="Avatar" style="width:100%; height:200px">
  <div class="container">
    <h4><b>Divyajeet Singh</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
<div class="team-member">
<div class="card">
  <img src="image/tonger.jpg" alt="Avatar" style="width:100%; height:200px">
  <div class="container">
    <h4><b>Hare Krishna</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>
</div>
<!-- html for quote slide starts here -->

<h1 style="margin-bottom:50px; color:red"> Few Words from others </h1>


<div class="slideContainer">
<div class="Slide">
<h1>"The way to get started is to quit talking and begin doing."</h1>
<div class="Caption">- Walt Disney</div>
</div>
<div class="Slide">
<h1>
"If life were predictable it would cease to be life, and be without flavor."
</h1>
<div class="Caption">-Eleanor Roosevelt</div>
</div>
<div class="Slide">
<h1>"Life is what happens when you're busy making other plans."</h1>
<div class="Caption">-John Lennon</div>
</div>
<a class="prevBtn">❮</a>
<a class="nextBtn">❯</a>
</div>
<br />
<div style="text-align:center">
<span class="Navdot" onclick="currentSlide(1)"></span>
<span class="Navdot" onclick="currentSlide(2)"></span>
<span class="Navdot" onclick="currentSlide(3)"></span>
</div>
<script>
   document.querySelector(".prevBtn").addEventListener("click", () => {
      changeSlides(-1);
   });
   document.querySelector(".nextBtn").addEventListener("click", () => {
      changeSlides(1);
   });
   var slideIndex = 1;
   showSlides(slideIndex);
   function changeSlides(n) {
      showSlides((slideIndex += n));
   }
   function currentSlide(n) {
      showSlides((slideIndex = n));
   }
   function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("Slide");
      var dots = document.getElementsByClassName("Navdot");
      if (n > slides.length) {
         slideIndex = 1;
      }
      if (n < 1) {
         slideIndex = slides.length;
      }
      Array.from(slides).forEach(item => (item.style.display = "none"));
      Array.from(dots).forEach(
         item => (item.className = item.className.replace(" selected", ""))
      );
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " selected";
   }
</script>

<h1 style="margin:50px; color:red">Our Work Culture </h1>
<p style="text-align:center"> MCM Connect, from its humble beginning of a team of 4 in 2020, has grown to a conglomerate of more than 100+ professionals today, which makes
   it one of the largest organization in this specialized domain. <br>Its resource base consists of a unique blend of highly specialized professionals
    who have significant experience in architecture, interior designing, BIM, engineering, and related technologies.<br> The organization’s consistent
     growth has been the result of providing high-value services by operating on a continually improving service model.<br>
   This has been the driving force behind its long-standing relationships with clients worldwide.</p>


<div class="first-gallery">
  <div class="first-box">
    <img src="image/emp1.jpg" style="height:275px; width:680px">
  </div>
  <div class="first-box">
    <img src="image/emp2.jpg" style="height:275px; width:680px">
  </div>
</div>












<div class="progress-bar">
<!-- html for slides end here -->
<span class="heading">Client Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
  </div>










<hr size="5">


<?php
include('footer.php');
?>



</body>
</html>







