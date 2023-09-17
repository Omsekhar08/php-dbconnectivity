<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <style>
        .main{
            justify-content: center;
            gap: 20px;
        }
    </style>
</head>
<body>
    <div class="main">
    <form action="user.php" method="post">
        <input type="number" name="id" id="" placeholder="userid"> <br>  <br>     
        <input type="text" name="fName" id="" placeholder="firstName">  <br> <br>  
        <input type="text" name="lName" id=""placeholder="lastName"> <br><br>  
        <input type="email" name="email" id="" placeholder="email"> <br> <br>  
        <input type="password" name="pass" id=""placeholder="password"> <br> <br>  
        <input type="number" name="phone" id=""placeholder="phoneNumber"> <br><br>  
        <input type="text" name="address" id=""placeholder="address"> <br> <br>  
        <input type="number" name="pin" id=""placeholder="PIN"> <br> <br>  
        <input type="submit" value="SUBMIT"> 

    </form>
    </div>
</body>
</html>
<?php
$id=$_POST['id'];
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$em=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$add=$_POST['address'];
$pin=$_POST['pin'];
$conn=new mysqli('localhost','root','root','productsitems');
$query=mysqli_query($conn,"select phoneno,email from users where phoneno
 = $phone or email = '$em' ");
$checkrows=mysqli_num_rows($query);
 
if($checkrows>0){
    echo'already exisits';
    header('location:log.php');
}
else{

$sql="INSERT INTO `users`(`userid`, `firstname`, `lastname`, `email`, `password`, `phoneno`, `address`, `pin`) 
VALUES ($id,'$fname','$lname','$em','$pass',$phone,'$add',$pin)";
mysqli_query($conn,$sql);
echo"insert successfully";
mysqli_close($conn);
}


?>