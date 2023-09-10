<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <form action="login.html" method="post">
        <input type="text" name="Name" id="" placeholder="Name"><br>
        <input type="number" name="Age" id=""placeholder="Age"><br>
        <input type="email" name="Email" id="" placeholder="email"><br>
        <input type="password" name="Pass" id="" placeholder="password"><br>
        <input type="number" name="Phno" id="" placeholder="phone number"><br>
        <input type="button" value="SUBMIT">
    </form>
</body>
</html>
<?php 
// include('index.php');
$host="localhost";
$username="root";
$password="root";
$db="products1";
//-----------------
$name=$_POST["Name"];
$age=$_POST["Age"];
$ph=$_POST["Phno"];
$em=$_POST["Email"];
$pass=$_POST["Pass"];
//----------
$conn=mysqli_connect($host,$username,$password,$db);
// if($conn){
//     echo'connected';
// }
$sql="insert into items(name,age,Phno,email,Password)
Values(' omsekhar',22,817081731,'omse@gmail.com',om@123)";

 mysqli_query($conn,$sql);


?>