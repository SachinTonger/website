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
padding:50px;
}



</style>
</head>
<body>
<div class="imagecontainer">
<img src="image/3d.jpeg" alt="Paris" width="100%" height="600">
<div class="centered">
    <h1>QS Estimation</h1>
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
    <p> MCM Connect can assist Quantity Surveyor with partnering the workload, Contractors, and vendors to estimate with online take-offs. The quantities taken off are based on project data provided along with specifications and product manuals. The QS activity also assists teams to assess the bill quantities against the take offs to make realistic cost bids to be better price competitive. Team is working on international codes and standards with Clients/Contractors and Consultants.<br><br>

The Service is scalable and can be dedicated to Client’s time and resource needs. The MCM Architects and Project team assist and supplement the QS team to plan schedules, review documents and provide a value-add support. <br><br>

MCM is open to the exploring additional tools and applications that the client, contractor, or consultant may wish to engage as per the project needs.<br><br>
</p>
</div>





<hr size="5">


<?php
include('footer.php');
?>



</body>
</html>
