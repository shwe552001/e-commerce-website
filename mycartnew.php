<?php 

include("headernewest.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-dark my-5">
        <h1 style="color:antiquewhite;font-family:Candara ;font-weight:lighter"  >CART</h1>
      </div>
      <div class="col-lg-9">
      <table class="table">
  <thead class="text-center">
    
    <tr>
      <th scope="col" style="font-family:Candara;">Serial No.</th>
      <th scope="col" style="font-family:Candara;">Item Name</th>
      <th scope="col" style="font-family:Candara;">Item Price</th>
      <th scope="col" style="font-family:Candara;">Quantity</th>
      <th scope="col" style="font-family:Candara;">Total</th>
      <th scope="col" style="font-family:Candara;"></th>
    </tr>
  </thead>
  <tbody class="text-center " style="font-family:Candara;">
  <?php
   $total=0;
    if(isset($_SESSION['cart']))
    {
     foreach($_SESSION['cart'] as $key => $value)
     {
      $sr=$key+1;
      
      echo"
      <tr>
       <td>$sr</td>
       <td>$value[Item_Name]</td>
       <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
       <td>
       <form action='manage_cartnew.php' method='POST'>
       <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'></td>
       <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
       </form>
       <td class='itotal'></td>
       <td>
       <form action='manage_cartnew.php' method='POST'>
       <button name='Remove_Item' class='btn btn-sm btn-outline-dark'>REMOVE</button>
       <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
       </form>
       </td>
       </tr>
       ";
     }
    } 
    ?>
     </tbody>
</table>
 </div>

<div class="col-lg-3">
<div class="border bg-light rounded p-4">  
<h4 style="font-family:Candara;">TOTAL:</h4>
<h5 class="text-right" id="gtotal"></h5>
<br>
<?php
  if(isset($_SESSION['cart']) && count($_SESSION['cart']) >0)
  {
?>
<form action="purchase.php" method="POST">
 <div class="form-group">
    <label>email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="password" name="password" class="form-control" required>
  </div>

  
  <br>
  <button class="btn btn-dark btn-block" name="purchase" style="font-family:Candara;">CHECKOUT</button>
</form>
  <form action="checkout.html">
  <button class="btn btn-dark btn-block" name="checkout" style="font-family:Candara;">PAYMENT</button>
  </form>
<?php
  }
?>
</div> 
</div>

</div>
  </div>
<script>
  var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementById('gtotal');

  function subTotal()
  {
    gt=0;
    for(i=0;i<iprice.length;i++)
    {
     itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
     gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
  }
  subTotal();
  </script>

</body>
</html>