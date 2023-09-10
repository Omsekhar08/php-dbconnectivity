<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        
    </form>
</body>
</html>
<?php
$a="omsekhar";
 $emp="";
 $vowels="aeiou";
 for($i=0;$i<strlen($a);$i++){
    if((!(strpos($vowels,$a[$i]))) and (!(is_int(strpos($vowels,$a[$i]))))){
        $emp=$emp.$a[$i];
    }
    else{
        $emp=$emp."*";
    }
 }
 echo$emp

?>