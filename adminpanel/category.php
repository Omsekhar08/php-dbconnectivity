
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>	category</title>

    <style>
         .main{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            width:300px ;
            border: 2px solid grey;
        }
        .main .cid , .cname{
            
            margin-bottom: 20px;
        }
        input{
            border-radius: 20px;
        }
        </style>
</head>
<body>
    <div class="main">

        <form action="category.php" method="post">
           <div class="cid"> <input type="number" name="categoryid" id="" placeholder="categoryid"></div>
           <div class="cname"> <input type="text" name="categoryname" id="" placeholder="categoryname"></div>
           <div class="csub"> <input type="submit" value="SUBMIT"></div>
        </form>
    </div>
    
</body>
</html>
<?php
if(isset($_POST['SUBMIT'])){

    $C_id=$_POST['categoryid'];
    $C_name=$_POST['categoryname'];
    $conn=new mysqli('localhost','root','root','productsitems');

$sql="insert into 	category (	categoryid,	categoryname)
values($C_id,'$C_name')";
$succ=mysqli_query($conn,$sql);
if($succ){
    echo"data added successfully";
}
}


?>