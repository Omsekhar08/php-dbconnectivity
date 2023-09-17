<!DOCTYPE html>
<html>
<body>

<form action="image.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="file" id="fileToUpload">
  <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>
 

<?php
session_start();
include("auth.php");
 $outMessageorError = '';

$targetDir = "omsekar/";

if(isset($_POST["submit"])){
if(!empty($_FILES["file"]["name"])){
// $fileName = basename($_FILES["file"]["name"]);
$fileName = rand(1000,10000)."-".$_FILES["file"]["name"];
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(in_array($fileType, array('jpg','png','jpeg','gif'))){
if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
$insert = mysqli_query($conn,"INSERT INTO imagefile(name, image)
 VALUES ('".$_POST['title']."', '".$fileName."')");
if($insert){
$outMessageorError = "The file ".$fileName. " has been uploaded successfully.";
}else{
$outMessageorError = "Image cant be uplaoded";
}
}else{
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