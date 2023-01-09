<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
<div class="col-lg-8">
<center><table class="table">
   <thead class="text-center"> 
    <tr>
      <th scope="col">Id</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price </th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
       <?php
        $total=0;
                   if(isset($_SESSION['cart']))
                   {
                    foreach ($_SESSION['cart'] as $key => $value) {
                       // code...
                     {

                        if($key>=0) $id=$key;

                       
                      $total=$total+$value['price'];
                     echo"
                      <tr>
                       <td>$id</td>
                       <td>$value[Item_Name]</td>
                       <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                       <td><form action='manage_cart.php' method='POST'><input class='text-center iquantity' onchange='this.form.submit();' type='number' value='$value[quantity]' min='1'max='10'><input type='hidden' name='Item_Name' value='$value[Item_Name]'></form></td>

<td class='itotal'></td>
<td><form action='manage_cart.php' method='POST'><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
     <input type='hidden' name='Item_Name' value='$value[Item_Name]'></form>
</td
                    </tr>
                   ";
               }
    }
         
         }
                   ?>     
   
   
  </tbody>
</table>
            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <?php 
                    if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) 
                        {
                    ?>
                    <form action="Purchase.php" method="POST">
                         <div class="form-group">
                             <label>Name</label>
                             <input type="text" name="name" class="form-control" required>
                         </div>
                          <div class="form-group">
                             <label>address</label>
                             <input type="text" name="address" class="form-control" required>
                         </div>
                          <div class="form-group">
                             <label>phone</label>
                             <input type="text"  name="phone" class="form-control" required>
                         </div>
                        
                         <div class="form-group">
                             <label>Item_Name</label>
                             <input type="text"  name="Item_Name" class="form-control" required>
                         </div>
                         <div class="form-group">
                             <label>price</label>
                             <input type="text"  name="price" class="form-control" required>
                         </div><div class="form-group">
                             <label>quantity</label>
                             <input type="text"  name="quantity" class="form-control" required>
                         </div>
                        <div class="form-check">
  <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    cash on delivery
  </label>
        <button class = "btn btn-primary btn-block" name="purchase">Make Purchase</button>
                 </div> </form>  
                    <?php
                     }
                    ?>
</div>   
          </div>
      </div>
  </div>
  <script>
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
       var itotal=document.getElementsByClassName('itotal');
      function subTotal()
       {
          for (i=0; i<iprice.length;i++)
           {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            }
        }
        subTotal();
  </script>
  </body>
  </html>


