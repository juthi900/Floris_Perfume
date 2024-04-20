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
    <style>




    </style>
</head>
<body>
<?php
    include('nav/nav.php');
    ?>
    
        

        <div class="container cartbl">
            <?php cart();?>
<div id="shopping_cart">
<span style="float:right ; font-size:20px; padding:10px ;line-height:30px;color:rgb(212, 17, 180); ">
Total Items:<?php total_items();?> Total price:<?php total_price();?><a href="cart.php"> CART</a>





</span>


</div>

<div id="products_box">


<form action="" method="post" enctype="multipart/form-data">
<table >


<tr>
    <th>Remove</th>

    <th>Product</th>
    
    <th>price</th>
</tr>

<?php

$total= 0;
global $con;       
$ip=getIp();
$sel_price="select * from cart  where ip_add='$ip'" ;
$run_price=mysqli_query($con,$sel_price);
while($p_price=mysqli_fetch_array($run_price)){

    $pro_id=$p_price['p_id'];
    $pro_price="select * from products where product_id='$pro_id'";
    $run_pro_price=mysqli_query($con,$pro_price);
    while ($pp_price=mysqli_fetch_array($run_pro_price)){
$product_price= array($pp_price['product_price']);
$values=array_sum($product_price);
$product_title=$pp_price['product_title'];
$product_image=$pp_price['product_image'];
$single_price=$pp_price['product_price'];
$total +=$values;


    


?>
<tr>
    <td>
    <input type="checkbox"  name="remove[]" value="<?php echo $pro_id;?>"/>    
    </td>
    <td><?php echo $product_title?><br>
<img src="<?php echo $product_image;?>"width="60" height="60"/>
</td>
    
    <td><?php echo $single_price;?></td>
</tr>

<?php } } ?>

<tr>
<td>sub total:</td>
<td><?php echo $total;?></td>


</tr>

<tr>
    <td><input type="submit" name="update_cart" value="update cart"/></td>
    <td><input type="submit" name="continue" value="continue shopping"/></td>
    <td><button><a href="checkout.php"style="text-decoration:none;">checkout</a></button></td>
</tr>


</table>

</form>
<?php
global $con;       
$ip=getIp();
if(isset($_POST['update_cart'])){
    foreach($_POST['remove'] as $remove_id){

$delete_product="delete from cart where p_id='$remove_id' AND ip_add='$ip'";
$run_delete=mysqli_query($con,$delete_product);
if($run_delete){
    echo"<script>window.open('cart.php','_self')</script>";
}

    }
}

if(isset($_POST['continue'])){

    echo "<script>window.open('index.php','_self')</script>";
}
?>



</div>
</div>
</div>

      
        
<?php
    include('footer/footer.php');
    
    
    ?>

        
            

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
   
</body>
</html>