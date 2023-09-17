<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.continer{
    height: 70vh;
    width: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid;
    border-radius: 30px;
    background-color: #FFE5E5;
}
.main{
    align-items: center;
    display: flex;
    justify-content: center;
    /* margin-left: 20%; */
   
}
.forms{
    /* height: 40px; */
    margin-top: 14px;
    border-radius: 20px;
}
    </style>
</head>
<body>
    <div class="main">

        <div class="continer">
            
    <form action="" method="post">
<div class="forms productid"><input type="number" name="productid" id="" required placeholder="product-ID"> <br></div>
 <div class="forms productimage"><input type="file" name="image" id="" required placeholder="ProductImage"> <br></div>
 <div class="forms  productdiscription"><textarea name="" id="" cols="30" rows="10" placeholder="Product Description"></textarea>
     <!-- <input type="text" name="" id=""> <br> -->
    </div>
 <!-- <div class="forms productname"><textarea name="" id="" cols="30" rows="10"></textarea> -->
   <div class="forms productname"> <input type="text" name="productname" id="" required placeholder="product-Name"> <br></div>
 <div class="forms stock"><label class="switch">
 <input type="checkbox">
 <span class="slider round"></span>
 </label>
</div>
 <div class="forms price"> <input type="number" name="price" id="" required placeholder="PRICE"><br></div>
 <div class="forms  submit"><input type="submit" value="Add Product" name="submit"></div>
  </form> 
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){

    $id=$_POST['productid'];
    $image=$_POST['image'];
    $name=$_POST['productname'];
    $price=$_POST['price'];
    $conn=mysqli_connect('localhost','root','root','productsitems');
$sql="INSERT INTO `productdetails`(`productid`, `productname`, `price`,productImage) 
VALUES ($id,'$name','$price','$image')";
mysqli_query($conn,$sql);
}



?>