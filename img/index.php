<?php
  include("auth_session.php");
     <p class='link'>Click here to <a href='index.php'><?php echo $_SESSION['email']; ?>!You are in user dashboard page.</a>
        <a href="logout.php">Logout</a></p>
?>
    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>own</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="img/style.css">
</head>
<body style="background-color:#25294b;">
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="index.html"> <img class="rounded-circle" src="img/md1.jpg" alt="Logo" style="width:40px";><b>  MD</b></a>
  <div class="container justify-content-center">
    <form>
  <div class="input-group">
  <div class="form-outline">
    <input id="search-input" type="search" id="form1" class="form-control" placeholder="search here..." >
   
  </div>
  <button id="search-button" type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button> </div></div></form>
  

          <a href="#"> <i class="fas fa-shopping-cart" style="font-size:20px;color:black"></i></a>
          <a href="#"><i class="fas fa-heart"style="font-size:20px;color:black;"></i></a>
          <a href="login.php"><i class="fas fa-user-circle" style="font-size:20px;color:black"></i></a>
  </nav> 
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar1 {
  width: 100%;
  background-color: #ffffff;
  overflow: auto;
}
.navbar2 {
  width: 100%;
  background-color: #ffffff;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: #ffffff;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000000;
}

.active {
  background-color: #ffffff;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: black;
  }
}
</style>
<nav>
  <div class="navbar text-black navbar-expand-md bg-ff navbar-dfes text-black">
          <a href="index.html"><i class="fa fa-fw fa-home text-black"></i> Home</a>
         <a href="contact.html"><i class="fas fa-user-circle text-black"></i> contact</a>
        <a href="login.php"><i class="fa fa-fw fa-user text-black"></i> login</a>
      <a  href="menu.html"><i class="fas fa-sliders-h text-black"></i>Menu</a>
       <a  href="nav.php"><i class="fas fa-sliders-h text-black"></i>Review</a>
    </nav>
</div>
?><div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/5.jpg" alt="Los Angeles" width="1700px" height="500px">
      <div class="carousel-caption">
        <h3>samsung</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" alt="Chicago" width="1700px" height="500px">
      <div class="carousel-caption">
        <h3>redmi 4</h3>
        <p>Thank you, redmi!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="New York" width="1700px" height="500px">
      <div class="carousel-caption">
        <h3>redmi 8a</h3>
        <p>show our persanality!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" alt="New York" width="1700px" height="500px">
      <div class="carousel-caption">
        <h3>redmi note 10</h3>
        <p>show our persanality!</p>
      </div>   
    </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
    </div>
  </div>
  <br><br>
     <section class="c1">
    <nav class="navbar navbar-expand-md bg-light navbar-light">
   <body bgcolor="blue"><h3>best sellers</h3><div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavbar"><button class="btn btn-light">view more</button></body></div></nav>
    <br><br>
    <div class="container-fluid">
  <div class="card-deck">
      <div class="card ">
    
      <div class="card-body text-center">
        <img src="img/2.jpg" height="250px" width="250px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
      </div>
   
    
 
      <div class="card bg-white ">
    
      <div class="card-body text-center">
        <img src="img/5.jpg" height="200px" width="200px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
      </div>
   
    
  
      <div class="card ">
    
      <div class="card-body text-center">
        <img src="img/3.jpg" height="250px" width="250px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
     
    </div>
    
  
      <div class="card ">
    
      <div class="card-body text-center">
        <img src="img/1.jpg" height="250px" width="250px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
      </div>
      
  </div>
</div>
  
  </section>
  <br><br>
  <nav class="navbar navbar-expand-md bg-light navbar-light">
   <body bgcolor="blue"><h3><i class="fa fa-gift"></i> Offers</h3><div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavbar"></nav></body></div>
   <br>
<div class="container-fluid">
<div class="row">
  <div class="container-fluid col-lg-6">

    <img src="img/mmm.jpg" height="400px" width="100%" >
  </div>
  <div class="container-fluid col-lg-6 text-white">
    <p> Mobile phones are a critical part of our daily life. Almost everyone has a mobile phone and it is becoming increasingly important in our lives. There are many different types of mobile phones on the market, so it is important to understand the differences between them before you buy.There are three main types of mobile phones: feature phones, smartphones, and tablets. Feature phones are generally less expensive than smartphones and tablets, and they typically have fewer features. Smartphones are more expensive than feature phones, but they offer a wider range of features, including the ability to access the internet and run apps. Tablets are even more expensive than smartphones and offer even more features than smartphones.
</p>
  <button type="button" class="btn btn-outline-light">view more</button>
  </div>
</div>
<nav class="navbar navbar-expand-md bg-light navbar-light">
   <body bgcolor="blue"><h3>Upcoming Deal</h3><div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavbar"><button class="btn btn-light">view more</button></body></div></nav>
    <br><br>
    <div class="container-fluid">
  <div class="card-deck">
      <div class="card ">
    
      <div class="card-body text-center">
        <img src="img/2.jpg" height="200px" width="200px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
      </div>
   
    
 
      <div class="card bg-white ">
    
      <div class="card-body text-center">
        <img src="img/5.jpg" height="200px" width="200px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
      </div>
   
    <div class="card bg-white ">
    
      <div class="card-body text-center">
        <img src="img/5.jpg" height="200px" width="200px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
      </div>
   
  
      <div class="card ">
    
      <div class="card-body text-center">
        <img src="img/3.jpg" height="200px" width="200px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
     
    </div>
    
  
      <div class="card ">
    
      <div class="card-body text-center">
        <img src="img/1.jpg" height="200px" width="200px" >
         <p>good-items</p>
            <h5>$50:50</h5>
            <del>$70:00</del>
            </div>
     <button class="btn btn-dark text-white">Buy Now</button>
      </div>
      
  </div>
</div>
<br><br>
<body>

        <footer class="footer">
<div class="container">           
       <div class="row">
        <div class="footer-col">
<h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
<h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
            
          </ul>
      </div>
      <div class="footer-col">
<h4>follow us</h4>
<div class="social-links">  
          
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div>
  </footer>
</body>
</html>

