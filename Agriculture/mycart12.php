<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Agriculture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="product.html">Product <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <div>
        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }
        ?>
         <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="mycart.php" class="btn btn-outline-success ">My Cart (<?php echo $count; ?>) </a>
        </li>
        
  </div>
</nav>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5" >
                   <h1> MY CART</h1>
            </div>
            <div class="col-lg-9">
         <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">serial No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                   $total=0;
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $sr=$key+1;
                            $total=$total+$value['Price'];
                            echo"
                            <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                <td>
                                  <form action='manage_cart.php' method='POST' >
                                    <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'
                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                   </td>
                                <td class ='itotal'></td>  

                                <form action='manage_cart.php' method='POST' >
                                <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                </form>
                                </td>
                               
                            </tr>";
                        }
                    }

                    ?>
                 
                   
                   
                </tbody>
                </table>


            </div>
            <div  class = "col-lg-3">
                <div class="border bg-light rounded p-4">
                <h4> Grand Total:</h4>
                <h5 class="text-right" id="gtotal"></h5>
                <br>
                <?php 
                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                {
                    ?>
            <form action="purchase.php" method="POST">
                <div class="mb-3">
                    <label >Full Name</label>
                     <input type="text" name="fullname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label >Phone Number</label>
                     <input type="number" name="phone_no" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label >Address</label> 
                     <input type="text" class="address" class="form-control" required>
                </div>
                 

                <!-- For Order Code     -->
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Cash On Delivery
                </label>
                </div>
                <br>
                    <button class="btn btn-primary btn-block" name="purchase">Order Now</button>
            </form>
                <?php
                 }
                ?>
        </div>
    </div>




    <script>

var gt=0;
var iprice=document.getElementsByClassName('iprice');
var iquantity=document.getElementsByClassName('iquantity');
var itotal=document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');


function subTotal() {
  gt = 0;
  for (i = 0; i < iprice.length; i++) {
    itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
    gt = gt + (iprice[i].value) * (iquantity[i].value);
  }
  gtotal.innerText = gt;
}

subTotal();
</script>












</body>
</html>