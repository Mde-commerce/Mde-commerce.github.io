<?php 
include ('connection.php');
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
          <a href="index.php"><i class="fa fa-fw fa-home text-black"></i> Home</a>
        <a href="login.php"><i class="fa fa-fw fa-user text-black"></i> login</a>
       <a  href="Admin Login.php"><i class="fas fa-sliders-h text-black"></i>Admin</a>
    </nav>
    <body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                       <center> <h2 class="display-6 text-center">Admin</h2></center>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>ID</td>
                                  <td>NAME</td>
                                    <td>ADDRESS</td>
                                <td>PHONE</td>
                                <td>PAYMENT</td>
                                <td>ITEM</td>
                                <td>PRICE</td>
                                <td>QUANTITY</td></center>
</tr>

                             <?php
      $sql="SELECT * from order_manager";
        $result=mysqli_query($con,$sql);
           while($row=mysqli_fetch_assoc($result))
        {  
                               ?>
                               <tr>
                               <td><?php echo $row['id'];?></td>
                               <td><?php echo $row['name'];?></td>
                               <td><?php echo $row['address'];?></td>
                               <td><?php echo $row['phone'];?></td>
                               <td><?php echo $row['pay_mode'];?></td>
                               <td><?php echo $row['Item_Name'];?></td>
                               <td><?php echo $row['price'];?></td>
                               <td><?php echo $row['quantity'];?></td>
</tr>

                               <?php

                               }
?>
            </div>
        </div>
    </div>
   </body>