<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}
.row{
    margin-top: 20px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 33%;
  padding: 10px 10px 10px 10px;
  text-align:center;
  height: 250px;
  margin:2px;
 /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.logo{
    width: 12%;
    float: left;
    margin: 10px -60px;
}
.fa {
  padding: 10px;
  font-size: 30px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius:100px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
 
  color: #3B5998;
}

.fa-twitter {
  
  color: #55ACEE;
}



.fa-linkedin {
  
  color: #007bb5;
}
.last-point{
    text-align:center;
    padding:15px;
    background-color:black;
    color:white;
    padding:50px;
}
.a {
  color: black;
}

</style>
</head>
<body>



<div class="row">
  <div class="column" >
  <a href="default.asp"><img src='image/mcm-logo.png' alt='logo' style="width: 50%;
    float: left;"> </a> <br><br><br><br><br><br>
    <p style="font-style:italic;font-weight:lighter;margin-right:80px;">Established in 2005, MCM Connect is a world <br>leader in Design Documentation & BIM consultancy.</p>
  </div>
  
  <div class="column" >
    <h2 style="color: #ff4757;font-family: 'Times New Roman', serif; padding: 10px;">Contact Info</h2>
    <h5 style="font-weight:Bold; te">Address</h5>
<p style="font-style:italic;font-weight:lighter">JMD Regent, Block C, 2nd Floor,<br> Unit No.250-252A, Sector 62, <br>Gurugram, Haryana-122413,India</p>
<h5 style="font-weight:Bold">Phone</h5>
<p style="font-style:italic;font-weight:lighter">999 999 9999</p>
<h5 style="font-weight:Bold">Email</h5>
<p style="font-style:italic;font-weight:lighter">info@mcmconnect.com</p>
</div>
  <div class="column" >
    <h2 style="color: #ff4757;font-family: 'Times New Roman', serif; padding: 10px;">Follow Us</h2>
    <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>

<a href="#" class="fa fa-linkedin"></a>
  </div>
</div>



<div class="last-point">
<h5>Copyright © 2023 - MCM Connnect | All Right Reserved  | Sachin Tonger</h5>
</div>
</body>
</html>
