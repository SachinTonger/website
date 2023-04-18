<?php
include('header.php');
?>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.map {
  
  width: 100%;
  
 
  height: 600px; /* Should be removed. Only for demonstration */
}




form {border: 3px solid #f1f1f1;margin-top:-60px;}

input[type=text], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}







.container-form {
  padding: 16px;
  width:500px;
  float:center;
  margin:auto;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


.column3 {
  float: left;
  width: 46%;
  padding: 10px;
  height: 300px;
 text-align:center;
 box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  
  margin:30px;/* Should be removed. Only for demonstration */
}
.column3:hover{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Clear floats after the columns */
.last-frm:after {
  content: "";
  display: table;
  clear: both;
}


</style>
</head>
<body>

<div class="map">
    <h3><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.305112057318!2d77.0751107150039!3d28.410048982505987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d226c8fd4fb5b%3A0xe56d422978da1086!2sJMD%20Empire!5e0!3m2!1sen!2sin!4v1677147180322!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h3>
  </div>




  <form action="/action_page.php" method="post">
 

  <div class="container-form">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    
    <label for="mobile"><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobile" required>
    
    <label for="Country"><b>Country</b></label>
    <input type="text" placeholder="Enter Country Name" name="country" required>
        
    <label for="massage"><b>Leave a Massage</b></label>
    <input type="text" placeholder="" name="massage" >
    <button type="submit">Submit</button>
    
  </div>

  
</form>


<div class="last-frm">
  <div class="column3" >
    <h2> United Kingdom</h2>
    <h3> MCM Connect </h3>
    <a href="mailto:info@mcmconnect.com">info@mcmconnect.com</a>
  </div>
  <div class="column3" >
    <h2>Ireland</h2>
    <h3> MCM Connect </h3>
   <a href="mailto:info@mcmconnect.com">info@mcmconnect.com</a>
  </div>
</div>



<?php
include("footer.php");
?>

</body>
</html>