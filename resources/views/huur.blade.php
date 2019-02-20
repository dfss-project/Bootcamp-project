<!doctype html>
<html lang="{{ app()->getLocale() }}">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSF woning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs
    /font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
    background-image: url("city1.jpg");
    background-repeat: no-repeat;
    height: 80%;
    width: 100%;
    background-size: cover;
     
   }
/* Style the search field */
form.example input[type=text], select {
    width: 10%;
  padding: 2px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 
}
input[type=text]:focus {
  border: 3px solid rgb(197, 38, 38);
}

.topnav {
  overflow: hidden;
  
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
  background-color: rgba(245, 13, 13);
  color: black;
}

.topnav a.active {
  background-color: rgb(19, 2, 114);
  color: white;
}
.topnav a.active:hover {
  background-color: rgb(255, 66, 8);
  color: black;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.example {
    position: absolute;
    top: 400px;
    left: 200px;
    font-size: 20px;
    border: 2px solid brown;
    
  
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
button {
    background-color: rgb(177, 8, 8);
    color: white;
    
}
.inlogen {
    position: fixed;
    top: 0px;
    right: 3px;
}

.topnav {
   position: absolute;
   top: 0px;
   left: 0px;

}
.section2 {
    border: 1px solid blue;
    background-color: rgb(209, 224, 185);
    padding: 0px;
    margin-right: 3px;
    position: absolute;
    top: 677px;
    left: 4px;
}
.houses{
    
    width: 22.5%;
    border: 2px solid rgb(36, 35, 35);
    margin: 1%;
    float: left;
}
h2 {
    color: rgb(27, 26, 26);
    padding-left: 4px;
    text-shadow:3px 5px #111010;
}
.houses:hover {
    box-shadow: 0 0 3px 4px rgb(36, 35, 35); 
    cursor: pointer;  
}
</style>
    
        </head>
<body>
        <form class="example" action="page.php">
                <input type="text" placeholder="Zoek...." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>  
        <input type="number" min="0" max="5" step="1" id="input-number"><button>Min Prijs</button>
      <input type="number" min="100" max="1000" step="100" id="input-number"><button>Max Prijs</button>
           <select name="Aantalslaapkamer">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select><button>Aantalwoonkamers</button>
          <select name="Aantalslaapkamer">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select><button>Aantalslaapkamer</button>
      
      <button>Zoek</button>
    </form>
    <div class="topnav">
            <a class="active" href="/">Home</a>
            <a class="active" href="#home">Huur</a>
            <a class="active" href="#about">Over Ons</a>
            <a class="active" href="#contact">Contact</a>
            <button class="inlogen" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
            
          
          </div>
          <section class="section2">
                <h2>Recent Toegevoegd</h2>
                <div class="houses">
                    <img class="houseimg" src="{{ URL::to('/images/house1.jpg')}}" height="300" width="300">
                </div>
                <div class="houses">
                    <img class="houseimg"src="{{ URL::to('/images/house1.jpg')}}" height="300" width="300">
                </div>
                <div class="houses">
                    <img class="houseimg"src="{{ URL::to('/images/house1.jpg')}}" height="300" width="300">
                </div>
                <div class="houses">
                    <img class="houseimg"src="{{ URL::to('/images/house1.jpg')}}" height="300" width="300">
                </div>
                <div class="houses">
                    <img class="houseimg"src="{{ URL::to('/images/house1.jpg')}}" height="300" width="300">
                </div>
                <div class="houses">
                    <img class="houseimg"src="{{ URL::to('/images/house1.jpg')}}" height="300" width="300">
                </div>
                <div class="houses">
                        <img class="houseimg"src="{{ URL::to('/images/house1.jpg')}}" height="300" width="300">
                    </div>
                    <div class="houses">
                        <img class="houseimg"src="{{ URL::to('/images/house1.jpg')}}" height="300" width="300">
                    </div>
</body>
</html>
