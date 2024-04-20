<?php


$con =mysqli_connect("localhost","root","","perfume");

//getting ip address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}


function getPro()
{


global $con;
$get_pro="select * from products order by RAND() LIMIT 0,12";
$run_pro=mysqli_query($con,$get_pro);
while($row_pro=mysqli_fetch_array($run_pro))
{
$pro_id=$row_pro['product_id'];
$pro_cart=$row_pro['product_cat'];
$pro_brand=$row_pro['product_brand'];
$pro_title=$row_pro['product_title'];
$pro_price=$row_pro['product_price'];
$pro_images=$row_pro['product_image'];

echo "
<div id='single_product'>
<h3>  $pro_title</h3>
<img src='$pro_images' width='180' height='180'/>
<p><b>BDT $pro_price</b></p>
<a href ='details.php ?pro_id=$pro_id' style='float:left;'>Details</a>

<a href='index.php ?add_cart=$pro_id'><button style='float:right'>Add to cart </button></a>


</div>




";

}



}


function cart(){
    if(isset($_GET['add_cart'])){
 global $con;       
$ip=getIp();
$pro_id=$_GET['add_cart'];
$check_pro="select * from cart  where ip_add='$ip'AND p_id='$pro_id'";
$run_check=mysqli_query($con,$check_pro);
if(mysqli_num_rows($run_check)>0){
echo"";
}


else{


    $insert_pro="insert into cart (p_id,ip_add) values('$pro_id','$ip')";
    $run_pro=mysqli_query($con,$insert_pro);
    echo "<script>window.open('index.php','_self')</script> ";
}
}

}

function allcart(){
    if(isset($_GET['add_cart'])){
 global $con;       
$ip=getIp();
$pro_id=$_GET['add_cart'];
$check_pro="select * from cart  where ip_add='$ip'AND p_id='$pro_id'";
$run_check=mysqli_query($con,$check_pro);
if(mysqli_num_rows($run_check)>0){
echo"";
}


else{


    $insert_pro="insert into cart (p_id,ip_add) values('$pro_id','$ip')";
    $run_pro=mysqli_query($con,$insert_pro);
    echo "<script>window.open('all_products.php','_self')</script> ";
}
}

}























function total_items(){


    if(isset($_GET['add_cart'])){

        global $con;       
        $ip=getIp();
        $get_items="select * from cart  where ip_add='$ip'";

$run_items=mysqli_query($con,$get_items);
$count_items=mysqli_num_rows($run_items);}
else{
    global $con;       
    $ip=getIp();
    $get_items="select * from cart  where ip_add='$ip'";

$run_items=mysqli_query($con,$get_items);
$count_items=mysqli_num_rows($run_items);  
}
echo $count_items;
    




}


function total_price(){
    
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
$total +=$values;


        }
    }
  echo $total;
}




//exclusive product







function getteam()
{


global $con;
$get_pro="select * from team";
$run_pro=mysqli_query($con,$get_pro);
while($row_pro=mysqli_fetch_array($run_pro))
{
$pro_id=$row_pro['team_id'];

$pro_abt=$row_pro['team_abt'];
$pro_name=$row_pro['team_name'];

$pro_images=$row_pro['team_image'];

echo "
<div id='team'>

<img src='$pro_images' width='200' height='200'/>
<p ><b> $pro_name</b></p>
<p> $pro_abt</p>


</div>




";

}



}




function getabt()
{


global $con;
$get_pro="select * from abt";
$run_pro=mysqli_query($con,$get_pro);
while($row_pro=mysqli_fetch_array($run_pro))
{
$pro_id=$row_pro['id'];
$pro_name=$row_pro['title'];

$pro_abt=$row_pro['abt'];


echo "
<div id='abt'>

<p ><b> $pro_name</b></p>
<p> $pro_abt</p>


</div>




";

}



}


















?>







