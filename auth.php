 

<?php
$hostname='localhost';
$username='root';
$password='root';
$database="omsekharfirst";
// include('auth.php');
$name=$_POST['Name'];
$age=$_POST['Age'];
$ph=$_POST['Phno'];
$email=$_POST['Email'] ;
echo ($name."".$age);

$quary=" Insert  INTO studetails(Name,Age,Phno,Email)
VALUES('{$name}' ,'{$age}','{$ph}','{$email}')";
$authenti = mysqli_connect($hostname,$username,$password,$database);
if($authenti){
    mysqli_query($authenti ,$quary);
}
 
?>