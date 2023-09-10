<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="products.php" method="post"><br>
        <input type="text" name="name" id=""placeholder="name"><br>
        <input type="number" name="age" id=""placeholder="age"><br>
        <input type="email" name="email" id="" placeholder="email"><br>
        <input type="password" name="Password" id=""placeholder="password"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php 
//  $hostname='localhost';
//  $username='root';
//  $password='root';
//  $database='products1'; 


 $name=$_POST["name"];
 $age=$_POST["age"];
 $email=$_POST["email"];
 $pass=$_POST["Password"];
 echo( $name );
 echo( $age );
 echo( $email ); 

 $conn=mysqli_connect('localhost','root','root','products1');
 $check=mysqli_query($conn,"select name,email from items where name='$name' and email='$email'");
 $checkrows=mysqli_num_rows($check);     
//   echo($checkrows),'<br>';
 if($checkrows>0){
     echo 'it is  exists';
     header('location:cart.html');
    }
    else { 
        $query = " insert into items (name,age,email,Password) values ('$name', $age,'$email','$pass')"; 
        mysqli_query($conn,$query);
        echo'success';  
      mysqli_close($conn);
    }
    

 ?>