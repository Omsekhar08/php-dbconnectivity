<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        .main{
            margin-left: 50%;
            justify-content: center;
            height: 300px;
            width: 300px;
            background: #000;
        }
        .email{
            /* margin-top: 50px; */
            margin-top: 90px;
            margin-left: 50px;
            justify-content: center;
            /* text-align: center; */
        }
        .pass{
            /* padding-top: 40px; */
            height: 20px;
            /* padding-left: 50px; */
            justify-content: center;
            margin-left: 50px;
            margin-top: 20px;
        }
        #ica{
            position: absolute;
            margin-top: 25px;
             margin-left: -160px;
        }
        #em{
            position: absolute;
            margin-top: 15px;
             margin-left: -168px;
        }

    </style>
</head>
<body>
    <form action=" index.php" method="get">
    <div class="main">
      <input style="position: relative;" type="email" name="email" id="" class=email>
    <i class="fa fa-envelope-square" id="em"></i>
     
      <input type="password" name="pass" class="pass" style="position: relative;">
    <i class="fa fa-unlock-alt" style="color:black" id="ica"></i>
    <p style="color:white;margin-left:175px;font-size:13px">
    forget password
    </p> 
      <button style="padding-left:0px;padding-top:0px;margin-left:50px">login</button></div>
    
    </form>
</body>
</html>
<?php
include('products.php');
$email=$_GET['name'];
$pass=$_GET['password'];

?>