
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
     crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
  crossorigin="anonymous"></script>

<div >
  <h2>Product Items</h2>
  
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Product ID</th>
        <th class="text-center">Product Image</th>
        <th class="text-center">Product Description</th>
        <th class="text-center">Product Name</th>
         <th class="text-center">Price</th>
         <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
       $conn=mysqli_connect('localhost','root','root','productsitems');
      $sql="select * from productdetails";
       $result=mysqli_query($conn,$sql);
      $count=1;
     
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row['productid']?></td>
      <td><img height='100px' src='<?="omsekar/".$row["productImage"]?>'></td>
      <td><?= $row['productDescription']?></td>
      <td><?=$row["productname"]?></td> 
      <td><?=$row["price"]?></td> 
      <td><a class="btn btn-info" href="Products.php?productid=<?php echo $row['productid']; ?>">Update</a>
      <a class="btn btn-info" href="productdelete.php?productid=<?php echo $row['productid']; ?>">Delete</a>
       </td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table> 
  <a class="btn btn-info" href="Products.php "> Add Product</a>
   
</body> 
</html>