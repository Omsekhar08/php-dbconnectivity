<?php  

  
if (isset($_GET['categoryid'])) {
    $conn=mysqli_connect('localhost','root','root','productsitems');
      $C_id = $_GET['categoryid'];
      $sql = " delete  from category WHERE categoryid = $C_id";
       $result = $conn->query($sql);
       if ($result == TRUE) {
          echo"delect sucessfully";
          header('location: categoriviewtable.php');
      }else{
          echo "Error:" . $sql . "<br>" ;
      }
  }
   
  ?> 