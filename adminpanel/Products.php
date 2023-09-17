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
            
    <form action="indexproductimage.php" method="post" enctype="multipart/form-data">
<div class="forms productname">Product Name:<input type="text" name="name" id="" required placeholder="product-Name"> <br></div>
 <!-- <div class="forms productimage"><input type="file" name="image" id="" required placeholder="ProductImage"> <br></div> -->
 <div class="forms  productdiscription"><textarea name="ProductDescription" id="" cols="30" rows="10" placeholder="Product Description"></textarea>
     </div>
  <div class="forms stock"><label class="switch">
 <input type="checkbox">
 <span class="slider round"></span>
 </label>
</div>
 <div class="forms price"> <input type="number" name="price" id="" required placeholder="PRICE"><br></div>
 <div class="forms file"><input type="file" name="file" id="fileToUpload"></div>
 <!-- <input type="submit" value="Upload" name="submit"> -->

 <div class="forms  submit"><input type="submit" value="Add Product" name="submit"></div>
  </form> 
</div>
</div>
</body>
</html>
 

<?php
  

// session_start();
// include("auth.php");
 $outMessageorError = '';

$targetDir = "omsekar/";

if(isset($_POST["submit"])){
    // $id=$_POST['productid'];
    // $image=$_POST['image'];
    $name=$_POST['name'];
    $discription=$_POST['ProductDescription'];
    $price=$_POST['price'];
    // $file=$_POST['file'];
    $conn=mysqli_connect('localhost','root','root','productsitems');
if(!empty($_FILES["file"]["name"])){
// $fileName = basename($_FILES["file"]["name"]);
$fileName = rand(1000,10000)."-".$_FILES["file"]["name"];
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(in_array($fileType, array('jpg','png','jpeg','gif'))){
if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
    // $checkQuery=" ";
    $result=mysqli_query($conn,"SELECT * FROM `productdetails` WHERE productname='$name'");
    $check=mysqli_num_rows($result);
    if($result->num_rows <1)
     { 
        $insert = mysqli_query($conn,"insert  INTO productdetails
    (productname,productImage,productDescription,price)
VALUES ('".$name."', '".$fileName."','". $discription."','".$price."')");
// $sql="INSERT INTO `productdetails`(`productid`, `productname`, `price`,productImage) 
// VALUES ($id,'$name','$price','$image')";
// echo $sql;
mysqli_query($conn,$insert); 
if($insert){
$outMessageorError = "The file ".$fileName. " has been uploaded successfully.";
}else{
$outMessageorError = "Image cant be uplaoded";
}
}
// else{
// echo" not inserted ";
// }
}
else{
$outMessageorError = "Some error";
}
}else{
$outMessageorError = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
}
}else{
$outMessageorError = 'Please select a file to upload.';
}
}

echo$outMessageorError;
?>