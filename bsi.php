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
margin:60px;
text-align:center;
font-family: Garamond, serif;
font-style: italic;
font-weight:100;
}
.row-1 {
  box-sizing: border-box;
  }
  .imagebox {
    position: relative;
    width: 50%;
    float: right;
    margin:21px;
    border-radius:10px;

    width: 30.33%;
    
    height: auto;
  }
  
  .imagefor {
    display: block;
    width: 100%;
    height: 300px;
    border-radius:10px;
  }
  
  .overlays {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: #210699;;
    border-radius:10px;
  }
  
  .imagebox:hover .overlays {
    opacity: 1;
  }
  
  .text-for-prime {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
  }
  .column {
  float: left;
  width: 28.33%;
  padding: 5px;
  margin:10px;
  
  height: 300px;/* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.row-1 {
  box-sizing: border-box;
  }
  .imagebox {
    position: relative;
    width: 50%;
    float: right;
    margin:21px;
    border-radius:10px;

    width: 30.33%;
    
    height: auto;
  }
  
  .imagefor {
    display: block;
    width: 100%;
    height: 300px;
    border-radius:10px;
  }
  
  .overlays {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: #210699;;
    border-radius:10px;
  }
  
  .imagebox:hover .overlays {
    opacity: 1;
  }
  
  .text-for-prime {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
  }

  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}



</style>
</head>



<body>
<div class="imagecontainer">
<img src="image/3d.jpeg" alt="Paris" width="100%" height="600">
<div class="centered">
    <h1>BIM Services And Implementation </h1>
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
    <h3>BIM CORE SERVICES</h3>
    <p> MCM can assist organisations, to generate or develop BIM from LOD 200 model to LOD 350-450 along with Clash detection and Quantity take offs but not limited to other supports for implementation, review, generation of families, standardisation and converting point cloud information. <br><br>

A well-coordinated model using 3D Modelling servicesallows clientsto check possible clashes between Building components and systems. IT allows a constructible error free model, accurate construction package, minimal waste at site and a virtual twin that Clients, Architects and Project manages can use for better site conflicts resolution.<br><br>

As a process all projects are run through a clash report and a health check to ensure minimal iterations. BIM technologists work closely with the Client Architects, consultants and contractors to develop the model to the required LOD with specification rich model as required. Dedicated studios help retain confidentiality and BIM Collaborate through central model ensures transparency and better project co-ordination.<br><br>
</p>
</div>

<div class="row">
  <div class="column" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
    <h2>3-D Modeling</h2>
    <p style="text-align:left;padding:30px">Constructability Studies<br> Drawing / Document Extraction<br>Clash / Conflict Detection & Resolutions<br>
Presentation Materials</p>
  </div>
  <div class="column" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
    <h2>4-D Modeling</h2>
    <p style="text-align:center;padding:30px">4-D Sequencing / Animations<br> Model-Based Scheduling</p>
  </div>
  <div class="column" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
    <h2>5-D Modeling</h2>
    <p style="text-align:right;padding:30px">Model-Based QTO & Estimation<br> Model-Based Cost Planning</p>
  </div>
</div>
<div class="row-1">
  <div class="imagebox">
    <img src="image/arc.jpg" alt="Avatar"      class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/arc1.jpg" alt="Avatar"    class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/arc2.jpg" alt="Avatar"  class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>
</div>

<div class="row-1">
  <div class="imagebox">
    <img src="image/arc.jpg" alt="Avatar"      class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/arc1.jpg" alt="Avatar"    class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/arc2.jpg" alt="Avatar"  class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>
  
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>



<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



<hr size="5">


<?php
include('footer.php');
?>



</body>
</html>