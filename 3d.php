<?php
include('header.php')
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
  background-color: #5e5137;
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

  /* VEDO SECTION CSS STARTS HERE */


  .colun {
  float: left;
  width: 45%;
  padding: 5px;
  height: 300px;
  margin:13px;/* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.vdobox:after {
  content: "";
  display: table;
  clear: both;
}


</style>
</head>
<body>
<div class="imagecontainer">
<img src="image/3dimension.jpg" alt="Paris" width="100%" height="600">
<div class="centered">
    <h1>3D VISUALISATION </h1>
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
    <p> Point Cloud scan information are being converted into 3D Revit models with rich source of existing information to assist the design and project team to visualise the impacts of change, leading to a more robust process of design decision making. The Laser scans are captured to accurately develop the model for both 2D documentation, planning approvals, virtual inspections, check deviations, or assist in developing the interfaces for the new construction.<br><br>

Scan to BIM allows a streamlined and transparent process to covert digital information of site to a visual data with information that will also for a quick decision making during the renovation or extension process.<br><br>

Information translation can be done up to LOD 350-400 accurately based on information provided for all elements o Architectural buildings, facades, Interiors, and MEPF (Mechanical, Electrical, Plumbing, Fire Protection)data.

</p>
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
  <div class="imagebox">
    <img src="image/3dimension.jpg" alt="Avatar"      class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/courtyard.jpg" alt="Avatar"    class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>

  <div class="imagebox">
    <img src="image/brawery.jpg" alt="Avatar"  class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>
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
  <div class="imagebox">
    <img src="image/courtyard.jpg" alt="Avatar"      class="imagefor">
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
    <img src="image/3dimension.jpg" alt="Avatar"  class="imagefor">
    <div class="overlays">
      <div class="text-for-prime">Hello World</div>
    </div>
  </div>
</div>


<h1 style="text-align:center; padding:40px"> HARE ARE SOME 3D SAMPLE</h1>

<!-- VEDIO SECTION STARTS HERE -->

<div class="vdobox" style="padding:20px">
  <div class="colun" style="text-align:center;">
  <video width="500" height="300" autoplay loop muted controls>
  <source src="image/video.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
  </div>
  <div class="colun" style="text-align:center;">
  <video width="500" height="300" autoplay loop muted controls>
  <source src="image/video.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
  </div>
</div>
<hr size="5">


<?php
include('footer.php');
?>



</body>
</html>
