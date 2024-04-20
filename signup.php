<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $err="";
    include 'functions/functions.php';
    $Name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $exists=false;
    if($exists==false){
        $sql=
        "INSERT INTO `user` (`Name`,`username`, `password`, `dt`) VALUES ('$Name','$username', '$password', current_timestamp())";
        $result = mysqli_query($con, $sql);
        if($result){
            
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <div class="imgBx">
            <img src="image/im.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>To see our private product SignUp first</h2>
                <form action="signup.php" method="POST">
                <div class="inputBx">
                        <span>Name</span>
                        <input type="text" name="name" require>
                    </div>
                    <div class="inputBx">
                        <span>Email or Username</span>
                        <input type="text" name="username"require>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password"require>
                    </div>
                    
                    
                    <div class="inputBx">
                        <input type="submit" value="Sign Up" name="">
                    </div>
                    <div class="inputBx">
                        <p>Don't Have An Account? <a href="login.php">Log In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
   
</body>
</html>