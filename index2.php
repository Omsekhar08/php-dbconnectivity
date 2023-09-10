<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php"  method="post">
        <!-- <input type="number" name="Id" id=""> -->
    <input type="text" name="Name" id="" placeholder="name ">
    <input type="number" name="Age" id="" placeholder="age">
    <input type="number" name="Phno" id="" placeholder="phno">
    <input type="email" name="Email" id=""  placeholder="email">
    <input type="submit" value="enter">
    </form>
</body>
</html> 

<?php 
// include('auth.php');
$name=$_POST['Name'];
$age=$_POST['Age'];
$ph=$_POST['Phno'];
$email=$_POST['Email']; 
 
$hostname='localhost';
$username='root';
$password='root';
$database="omsekharfirst";


echo ($name);
echo ($age);
echo ($ph);
echo ($email);
// $authenti = mysqli_connect();
$conn = mysqli_connect($hostname,$username,$password,$database);
// $sql = "INSERT INTO studetails  VALUES ('$name\n' ,$age\n,'$ph\n','$email')";

$nams=0;
$name1=mysqli_query($conn,"select name from studetails where name='$name'");
$chechrows=mysqli_num_rows($name1);
    
if($chechrows>0){
    echo'already exists';
}
else{
    $sql=" INSERt INTO studetails (Name,Age,Phno,Email)
    VALUES('\n$name' ,\n$age,'\n$ph','\n$email')";
    echo"Added Successfully";
}
echo ($nams);
$emails=0;
$email1=mysqli_query($conn ,"select email from studetails where email='$email'");
if(mysqli_num_rows($email1)>0){
    $emails++;
}
echo($emails);
$result='';
// $query='';
if($nams>0||$emails>0){
    if($nams >0)
    $result.='Name';
    if($emails > 0)
    $result.='Email';
    $result.='All ready exists';
}

else{
    $sql=" INSERt INTO studetails (Name,Age,Phno,Email)
    VALUES('\n$name' ,\n$age,'\n$ph','\n$email')";
    echo"Added Successfully";

}
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>"; 
    echo nl2br("\n$name\n $age\n "
        . "$ph\n $email");
} else{
    // echo "ERROR: Hush! Sorry $sql. ";
     echo('all ready exists');
}


?>