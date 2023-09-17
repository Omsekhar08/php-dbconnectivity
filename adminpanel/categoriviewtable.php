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
  <h3>Category Items</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Category Id</th>
        <th class="text-center">Category Name</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      $conn=mysqli_connect('localhost','root','root','productsitems');
      $sql="SELECT * from category";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row['categoryid']?></td>
      <td><?=$row["categoryName"]?></td>   
       
      <td><a class="btn btn-primary" href="categoryUpdate.php?categoryid=<?php echo $row['categoryid'] ?>">Edit</a>
        <a class="btn btn-danger" href="categorideleterow.php?categoryid=<?php echo $row['categoryid'] ?>">DELETE</a></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <a class="btn btn-primary" href="category.php">Add Category</a> 
   
     
  </div>

  
</div>
</body>
</html>