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
  background-color: #f0d67a;
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
padding:50px;
}



</style>
</head>
<body>
<div class="imagecontainer">
<img src="image/cad.jpg" alt="Paris" width="100%" height="600">
<div class="centered">
    <h1>CAD Drafting & Detailing </h1>
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
    <p> CAD Design, drafting and documentation services are scalable to the needs of the Organisation. Team compromise of CAD technologists, Architects and Interior Designers along with Project lead with over 15 years of industry experience in developing and detailing packages asper project needs.<br><br><br><br>

MCM can assist clients, contractors, and bespoke designers to set up studios that can be dedicated and confidential to their designs. These team operate as Studio extensions and help reduce overheads and time. The collaborative process over a period has proven to bring down design packages time considerably. Lead by well experienced Design Architects, the process helps in not just the drafting scope but a value add and value engineering scope by process of design review for both standardisation as well as refining details to avoid constructional challenges.<br><br><br><br>
</p>
</div>





<hr size="5">


<?php
include('footer.php');
?>



</body>
</html>
