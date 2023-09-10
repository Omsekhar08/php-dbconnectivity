<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sample.php" method="post"> 
        <input type="number" name="Number" id="" placeholder="Number">
        <input type="button" value="submit"  onclick="func1()">

    </form>
</body>

</html>
<?php
// function func1(){/
$number=$_POST['Number']; 
// if($number % 2  == 0){  
//     // include('even.php');
// }
if($number%2==1){
    include("odd.php");
}
else{
    include("even.php");    
}
// }
// func1();
?>