
<!doctype html>
<?php



include ("functions/functions.php");




?>







<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
  </head>
  <body>

<?php
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
 
        $address=$_POST['address'];
        $items = $_POST['items'];
 
        $subtotal=$_POST['subtotal'];

  
      $sql="INSERT INTO `confirm` ( `name`, `address`,`items`,`subtotal`) VALUES ( '$name', 
       '$address','$items','$subtotal')";
$result=mysqli_query($con,$sql);




    
    }

    
?>
<?php
    include('nav/nav.php');
    ?>


<div class="full">

<div class="container contact-form w-75 m-auto h-75 ">
<div class="text">
            <h3 class="mt-5 mb-5">Confirm Order</h3>
            
        </div>
      

<div class="row  text1" >


<div class="col-md-6">

        <form action="checkout.php" method="POST" autocomplete="off">
        <?php cart();?>
            <div class="contact my-2">
              <label for="name">Username: </label>
              <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="contact my-2">
              <label for="address">Addres: </label>
              <input type="text" name="address" id="address" class="form-control" required>
  </div>

             <div class="contact my-2">
              <label for="subtotal">Total price: </label>
              <input type="text" name="subtotal" id="subtotal" class="form-control"value="<?php total_price();?>" >
            </div>
            <div class="contact my-2">
              <label for="items">Total qty: </label>
              <input type="text" name="items" id="items" class="form-control"value="<?php total_items();?>" >
            </div>







            <button name="button1" id="submit" class=" btn btn btn-outline-success btn-sm mb-5"  >Confirm</button>
    

        </form>
</div>
    </div>
</div>

</div>

<?php
    include('footer/footer.php');
    
    
    ?>

  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>