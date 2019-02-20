<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="/public/style.css">
        <title>Project</title>
        <style>
   body {
    background-image: url("/images/city1.jpg");
    background-repeat: no-repeat;
    height: 80%;
    width: 100%;
    background-size: cover;
     
   }
.header {
    color: black;
    text-shadow:2px 2px #111010;
    position: absolute;
    top: 5px;
    left: 10px;
}
h2 {
    color: white;
    padding-left: 4px;
    text-shadow:3px 5px #111010;
}

.section2 {
    border: 1px solid blue;
    background-color: black;
    padding: 0px;
    margin-right: 3px;
    position: absolute;
    top: 677px;
    left: 4px;
}
.footer{
    background-color: #060b30;
    color: rgb(228, 228, 241);
    position: absolute;
    padding: 15px;
    text-align: center;
    padding-bottom: 15px;
    width: 100%;
    top: 1600px;
    left: 0px;

}
.houses{
    
    width: 22.5%;
    border: 2px solid whitesmoke;
    margin: 1%;
    float: left;
}
.houses:hover {
    box-shadow: 0 0 3px 4px whitesmoke; 
    cursor: pointer;  
}
.houseimg{
    width: 100%;
}
.group1{
    position: absolute;
    top: 1440px;
    left: 50px;
}
#tags{
    display: block;
    list-style-type: none;
    text-decoration: none;  
}
#tags li a{
        text-decoration: none;  
}
.group2{
    position: absolute;
    top: 1440px;
    left: 300px;
}
.group3{
    position: absolute;
    top: 1440px;
    left: 500px;
}

        input[type=search]{
    width: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ffcdab;
    border-radius: 10px;
    box-sizing: border-box;
    color:#fff4e3; 
    border-width: 3px;
 
}
input:hover[type=search]{
    background-color: #ffcdab;
    color: antiquewhite;
}
.index {

    width: 15%;
    background-color: #ee5d38;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;  
    border-radius: 8px;
    position: relative;
    top: -1px;
    right: -2px;
}
.index:hover {
background-color: rgb(9, 53, 172);
color: antiquewhite;
}
input::-webkit-calendar-picker-indicator[type=search] {
    opacity: 100;
 }

.Search2 {
margin: 0 auto;
text-align: center;
width: 100%;
padding-top: 15%;
position: absolute;
top: 100px;
left: 0px;
 }
 
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: rgba(245, 13, 13, 0.781);
  color: black;
}

.topnav a.active {
  background-color: rgb(238, 97, 3);
  color: white;
}
.topnav a.active:hover {
  background-color: rgba(245, 156, 13, 0.781);
  color: black;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.inlogen {
  background-color: rgb(233, 88, 31);
  color: white;
  border: none;
  cursor: pointer;
  width: 50%;
  float: right;
  padding: 14px 16px;
  display: block;
  font-size: 17px;
}

.inlogen:hover {
  opacity: 0.8;
  background-color: rgba(8, 33, 177);
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.cancelbtn:hover {
  color: blue;
  cursor: pointer;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
   overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:focus {
  color: red;
  cursor: pointer;
}

.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes  animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

@media  screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

  
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.container {
  padding: 16px;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; /
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media  screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
    </style>
</head>


<body>
        
    <header class="header">
      
    </header>
    <section class="section1">
        

    </section>
    <section class="section2">
        <h2>Recent Toegevoegd</h2>
        <div class="houses">
            <img class="houseimg" src="<?php echo e(URL::to('/images/house1.jpg')); ?>" height="300" width="200">
        </div>
        <div class="houses">
            <img class="houseimg"src="<?php echo e(URL::to('/images/house1.jpg')); ?>" height="300" width="200">
        </div>
        <div class="houses">
            <img class="houseimg"src="<?php echo e(URL::to('/images/house1.jpg')); ?>" height="300" width="200">
        </div>
        <div class="houses">
            <img class="houseimg"src="<?php echo e(URL::to('/images/house1.jpg')); ?>" height="300" width="200">
        </div>
        <div class="houses">
            <img class="houseimg"src="<?php echo e(URL::to('/images/house1.jpg')); ?>" height="300" width="200">
        </div>
        <div class="houses">
            <img class="houseimg"src="<?php echo e(URL::to('/images/house1.jpg')); ?>" height="300" width="200">
        </div>
        <div class="houses">
                <img class="houseimg"src="<?php echo e(URL::to('/images/house1.jpg')); ?>" height="300" width="200">
            </div>
            <div class="houses">
                <img class="houseimg"src="<?php echo e(URL::to('/images/house1.jpg')); ?>" height="300" width="200">
            </div>
    </section>
    <div class="group1">
        <ul id="tags">
            <li><b><a href="huur">Huur</a></b></li>
            <li><a href="#">Alle Kamers</a></li>
            <li><a href="#">Almelo</a></li>
            <li><a href="#">Enschede</a></li>
            <li><a href="#">Hengelo</a></li>
        </ul>
    </div>
    <div class="group2">
            <ul id="tags">
                <li><b><a href="koop">koop</a></b></li>
                <li><a href="#">Alle Kamers</a></li>
                <li><a href="#">Almelo</a></li>
                <li><a href="#">Enschede</a></li>
                <li><a href="#">Hengelo</a></li>
            </ul>
        </div>
       
    <footer>
        <div class="footer">
            <a href="#">©DSF Woning. </a><span>All rights reserved 2019.</span>
        </div>
    </footer>
    
    
<div class= "Search2">
    <form  method="post" action="<?php echo e(url('huis')); ?>">
  
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="search" id="mySearch" name="steden" placeholder="steden">
        <input type="search" id="mySearch" name="prijs" placeholder="prijs">
        <input type="search" id="mySearch" name="kamers" placeholder="woonkamers">
        <input type="search" id="mySearch" name="slaapkamers" placeholder="slaapkamers">
        <button class="index">Zoek</button>

    </form>
</div>

<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div class="topnav">
        <a class="active" href="#home">Home</a>
        <a class="active" href="/huur">Huur</a>
        <a class="active" href="/koop">Koop</a>
        <a class="active" href="#about">Over Ons</a>
        <a class="active" href="#contact">Contact</a>
        <button class="inlogen" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
      
      </div>
      <div id="id01" class="modal">
        
        <form class="modal-content animate" action="/action_page.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
      
          <div class="container" >
          
            <label for="uname"><b>Naam</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Onthoud mij
            </label>
          </div>
      
          <div class="container" style="background-color:#b3e0ff">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Vergeten <a href="#">password?</a></span>
          </div>
        </form>
      </div>
     
      <script>
      // Get the modal
      var modal = document.getElementById('id01');
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
      </body>
</html>
