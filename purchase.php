<?php
session_start();
$con=mysqli_connect("localhost","root","") or die(mysqli_error($con));
$a=mysqli_select_db($con,"testing")or die(mysqli_error($con));
if($a)
{
echo"done";    
}
else
{

echo"<script>
                        alert('cannot connect to database');
                        window.location.href='mycart.php';
       
                    </script>";
                    exit();
                }
                  if($_SERVER["REQUEST_METHOD"]=="POST")
                  {
                  	if(isset($_POST['purchase']))
                  {
                  $b="INSERT INTO `order_manager`(`name`, `address`, `phone`, `pay_mode`,`id`, `Item_Name`, `price`, `quantity`) VALUES ('$_POST[name]','$_POST[address]','$_POST[phone]','$_POST[pay_mode]','$_POST[id]','$_POST[Item_Name]','$_POST[price]','$_POST[quantity]')";
                  if(mysqli_query($con,$b))
                  {
                
                 mysqli_stmt_bind_param($stmt,"isii",$id,$Item_Name,$price,$quantity);
                 foreach($_SESSION['cart'] as $key => $values) 
                 {
                   $Item_Name=$values['Item_Name'];
                   $price=$values['price'];
                   $quantity=$values['quantity'];
                   $cus_name=$values['cus_name'];
                   mysqli_stmt_execute($stmt);
                 	}
                 	unset($_SESSION['cart']);
                 	echo"<script>
                        alert('order placed');
                        window.location.href='mycart.php';
                        </script>"; 
               }
               else
               {
              echo"<script>
                        alert('SQL query prepare Error');
                        window.location.href='mycart.php';
                        </script>"; 	
               }
                  }
                  else
                  {
                  	echo"<script>
                        alert('SQL Error');
                        window.location.href='mycart.php';
                        </script>";
                  }
                  }

?>