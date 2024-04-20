<?php
$login=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

    include 'functions/functions.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    
        $sql=
        "Select * from user where username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            $login=true;
            
            session_start();
            
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            $_SESSION['user_id']=$username;
            header("location: all_products.php");
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
                <h2>Login</h2>
                <form action="login.php" method="POST" autocomplete="off">
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="text" name="username">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">Remember Me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign In" name="">
                    </div>
                    <div class="inputBx">
                        <p>Don't Have An Account? <a href="signup.php">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>