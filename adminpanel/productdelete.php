<?php  
  
  if (isset($_GET['productid'])) {
    $conn=mysqli_connect('localhost','root','root','productsitems');
      $id = $_GET['productid'];
      $sql = " delete from `productdetails` WHERE productid = $id";
       $result = $conn->query($sql);
       if ($result == TRUE) {
          echo"delect sucessfully";
          header('location:productsviwetable.php');
      }else{
          echo "Error:" . $sql . "<br>" ;
      }
  }
   
  ?> 