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
        $username=$_POST['username'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $message=$_POST['message'];

        $sql="INSERT INTO contact(Username, Email, Contact, Address, Message) VALUES ('$username','$email','$contact','$address','$message')";

     
$result=mysqli_query($con,$sql);




    
    }




    
?>
<?php
    include('nav/nav.php');
    ?>

<div class="container w-50 m-auto">
        <div class="text">
            <h1 class="text-center">Contact Us</h1>
            <hr class="w-25 m-auto bg-dark">
        </div>
        <form action="contact.php" method="POST" autocomplete="off">
            <div class="user my-4">
              <label for="username">Username: </label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="email my-4">
              <label for="email">E-mail: </label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="contact my-4">
              <label for="contact">Contact: </label>
              <input type="number" name="contact" id="contact" class="form-control" required>
            </div>
            <div class="address my-4">
              <label for="address">Address: </label>
              <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="message my-4">
              <label for="message">Message: </label>
              <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <button class="btn btn-success">Send Message</button>
        </form>
    </div>




<?php
    include('footer/footer.php');
    
    
    ?>

  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>