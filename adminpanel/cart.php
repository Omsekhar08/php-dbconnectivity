<?php 

$conn=mysqli_connect('localhost','root','root','productsitems'); 
if($conn){
    $sql="select productid, userid,quantity,price from cart ,users,orders
    inner join  ";
}

?>