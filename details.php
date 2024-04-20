<!DOCTYPE html>
<?php
include("functions/functions.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="abcd.css">
</head>
<body>
<?php
    include('nav/nav.php');
    ?>



      <section class="details">
            

            <div id="content_area">
<div id="shopping_cart">
<span style="float:right ; font-size:20px; padding:10px ;line-height:40px;color:rgb(212, 17, 180); ">
Total Items:Total price:
<a href="cart.php">GO to CART</a>




</span>


</div>
<div id="products_box">
  <?php

if(isset($_GET['pro_id']))

{
$product_id=$_GET['pro_id'];

$get_pro="select * from products where product_id='$product_id'";
$run_pro=mysqli_query($con,$get_pro);
while($row_pro=mysqli_fetch_array($run_pro))
{
$pro_id=$row_pro['product_id'];

$pro_title=$row_pro['product_title'];
$pro_price=$row_pro['product_price'];
$pro_images=$row_pro['product_image'];
$pro_desc=$row_pro['product_desc'];

echo "
<div id='single_product'>
<h3>  $pro_title</h3>
<img src='$pro_images' width='200' height='210' 'padding='10'/>
<p><b>BDT $pro_price</b></p>
<p >$pro_desc</p>
<a href ='index.php ?pro_id=$pro_id' style='float:left;'>Go back</a>



<a href='index.php ?pro_id=$pro_id'><button style='float:right'>Add to cart </button></a>
</div>




";
}
}?>


</div>
</div>
</div>


</section>
























        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <?php
    include('footer/footer.php');
    
    
    ?>
</body>
</html>