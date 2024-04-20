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

<section class="carousel">

  <div class="container-fluid">
    
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bn4.jpg" alt="Los Angeles" style="height: 450px; width: 100%; ">
            <div class="carousel-caption ">
             
              
            </div>   
          </div>
          <div class="carousel-item">
            <img src="img/atar.jpeg" alt="Chicago" style="height: 450px;  width: 100%;">
            <div class="carousel-caption">
              <h3>ATAR SPECIAL</h3>
              <p>Your choice!</p>
              
            </div>   
          </div>
          <div class="carousel-item">
            <img src="img/bn5.jpg" alt="New York" style="height: 450px;  width: 100%;">
            <div class="carousel-caption">
              
            
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev" >
          <span class="carousel-control-prev-icon" ></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
  </div>
</section>






    <section class="team"> 
              <div class="container mb-5">
               

                  
             
                <h2 class="text-center mt-5 mb-5">Team</h2>
                <div class="row section">
                <div id="content_area">
    







<?php


getteam();

?>
</div>
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