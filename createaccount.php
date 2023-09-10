<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createaccount.php" method="post">
        <input type="number" name="id" id="" placeholder="id"> <br>
        <input type="text" name="name" id=""placeholder="names" required><br>
        <input type="number" name="age" id=""placeholder="ages" required><br>
        <input type="email" name="email" id=""placeholder="emails" required><br>
        <input type="number" name="phone" id=""placeholder="phnos" required><br>
        <a href="getdata.php">viewdetails</a>
        <input type="submit" value="submit">
    </form> 
 </body>
</html>
<?php

    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phno=$_POST['phone'];
   
$conn=mysqli_connect('localhost','root','root','userdetails');
    // if($conn){
    //     echo'connect';
    // }
    // else{
    //     echo"hdvs";
    // }
    $check=mysqli_query($conn,"select name,email from user where name='$name' and email='$email'");
    $checkrows=mysqli_num_rows($check);
    echo$checkrows;
    if($checkrows>0){
        echo'already exisits';
    }
    else{ 
        $query="insert into user (id,name,age,email,phone) values ('$id','$name',$age,'$email',$phno)";
        mysqli_query($conn,$query);
        echo"success";
        mysqli_close($conn);
    }
//  echo readfile("C:/Users/lenovo/Desktop/omsekharjs/7up7down.html");

?>