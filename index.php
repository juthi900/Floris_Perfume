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
<body onload="slider()">

    <?php
    include('nav/nav.php');
    ?>


      <div class="banner">
        <div class="slider">
        
        
            <img src="img/atar.jpeg" alt="" id="slideimg1" class="img">
        </div>
        <div class="overlay">
        <div class="conte">
        <h1>WELCOME TO FLORIS PERFUME SHOP</h1>
        <h3> Buy your signature scent at Bangladesh's leading and most reputed online fragrance store at warehouse prices and save big on all perfumes and colognes.</h3>
       
        </div>
        
        
        </div>
            </div>



            <section class="brand"> 
              <div class="container ">
               

                  
             
                <h2 class="text-center  mb-5">OUR Top Brands</h2>
                <div class="row section">
                <div id="content_area">
                <?php cart();?>
<div id="shopping_cart">
<span style="float:right ; font-size:20px; padding:10px ;line-height:20px;color:rgb(212, 17, 180); ">
Total Items:<?php total_items();?> Total price:<?php total_price();?>
<a href="cart.php">GO to CART</a>




</span>


</div>







<?php


getPro();

?>










        </div>
    </div>

               
  
                </div>
                </div>
                
            </section>


          
        
            
     







            
            <script>
        
        var slideimg1=document.getElementById("slideimg1");
        var img= new Array("img/fume.jpg",
        
        
        "img/trendy.jpg");
              var len=img.length;
              var i=0;
              function slider() {
                  if(i>len-1){
        
                    i=0;
                  }
                  slideimg1.src=img[i];
                  i++;
                  setTimeout('slider()',3000)
              }
            </script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    


    
    <?php
    include('footer/footer.php');
    
    
    ?>



</body>
</html>