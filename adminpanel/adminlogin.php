<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        /* .continer{
            height: 70vh;
    width: 30%;
    display: flex;
    justify-content: center;
  
    text-align: center;
    align-items: center;
    border: 2px solid;
    border-radius: 30px;
    background-color: #F4EEEE;
        } */
        .cart{
           display: block;         
        height: 400px;
        width: 300px;
        border-radius: 39px;
        margin-top: 200px;
       margin-left: 40%;
        text-align: center;
        border: 2px solid; 
        align-items: center; 
        background:linear-gradient(#7286D3,#7286D3,#537FE7,#7286D3);
        /* background-color: #537FE7; */
        /* background-image: -moz-linear-gradient(gvhsdfsd); */
        
        }
        .cart .email ,.password{
            margin-left: 50px;
            border-radius: 20px;
            height: 35px;
            margin-bottom: 20px;
            background-color: white;
            display: flex;
            border: 2px solid;
            width: max-content;
            text-align: center;
            justify-content: center;
        
        }
        .cart .email input ,.password input{
            border-radius:0px 20px 20px 0px;
            border: none;           
        }
        hr{
            width: 55px;
            margin-left: 30%px;
            border: 2px solid aqua;
            /* background-color: ; */
            margin-top: 5px;
        }
        #loginid {
            /* margin-top: 20px; */
            margin-bottom: 20px;
            height: 30px;
            margin-left: -100px;
            width: 80px;
            border-radius: 10px;
        }
        #signinid{
            margin-bottom: 20px;
            height: 30px;
            margin-left: -60px;
            width: 120px;
            border-radius: 10px;
        }
        #signinid:hover{
            background-color: black;
            color: white;
            transition:3s;
        }
        </style>
</head>
<body>
    <div class="continer">
        <div class="cart">
            <div><img src="" alt=""></div>
            <form action="adminlogin.php"method="post">
            <h3> Admin <hr ></h3>
            <div class="email"> <i class="fa fa-envelope" style="font-size:20px; padding-top: 5px;"></i>
                <input type="email" name="email" id="formEmail" placeholder="ADMIN EMAIL"> </div>
            <div class="password"><i class="fa fa-lock fa-shake" style="font-size:25px;padding-top: 5px;"></i>
                <input type="password" name="password" id="formPassword" placeholder="Password"></div>
            <div class="submit">
                <!-- <a href="admin.php" type="submit" id="lognin" name="submit">submit</a> -->
               
                <input type="submit" value="submit" id="loginid"  name="submit"  >
            </div>
            <div class="submit">
            <!-- <a class="btn btn-info" href="updateuser.php?id=<//?php echo $row["id"]; ?>">Update</a> -->
                <input type="submit" value="Create account" id="signinid" name="Signin" ></div>
                </form>
        </div>
    </div>
</body>
</html>
<?php 
// include("auth.php");
$conn=new mysqli('localhost','root','root','productsitems');
if(isset($_POST['submit'])){
    
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $result=mysqli_query($conn,"select email,password from admin where email='$email' and password='$pass' ");
    $check=mysqli_num_rows($result);
    echo"$check";
    if($result->num_rows >0){
        header("location:admin.php");
    }
    else{
        echo"!Wrong Password";
    }
    
}
if(isset($_POST['Signin'])){
    header("location:admincreate.php");
}
?>