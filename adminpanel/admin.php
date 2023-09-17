
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
     crossorigin="anonymous">


       <title>Document</title>

       <style>
        .icon{
            justify-content: center;
            text-align: center;
        }
        .cards{
            display: flex;
            gap: 100px;
            /* margin-left: 100px; */
            /* height: 200px;
            background-color: blue; */

        }
        .mainbody{
            width: 80%;
            margin-left: 10%;
            border: 2px solid black;
        }
       </style>
</head>
<body>
    <div class="mainbody">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">ADMIN</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      <div class="icon">user</div>
    </form>
  </div>
</nav>


<div class="cards" style="display:flex">
<div class="card text-bg-light mb-3" style="max-width: 18rem;">
  <!-- <div class="card-header">Header</div> -->
  <div class="card-body">
    <h1 class="card-title"> 
    <a href="viewordertable.php" onclick="showOrders()"><i class="fa fa-list"></i> Orders</a>

    </h1>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  </div>
</div>
  <div class="card text-bg-light mb-3" style="max-width: 18rem;">
  <!-- <div class="card-header">Header</div> -->
  <div class="card-body">
    <h1 class="card-title"> 
    <a href="productsviwetable.php"   onclick="showProductItems()" ><i class="fa fa-th"></i> Products</a>

    </h1>
    <!-- <p class="card-text">ent.</p> -->
  </div>
</div>
<div class="card text-bg-light mb-3" style="max-width: 18rem;">
  <!-- <div class="card-header">Header</div> -->
  <div class="card-body">
    <h1 class="card-title">
<a href="customertableview.php"  onclick="showCustomers()" ><i class="fa fa-users"></i> Customers</a>
</h1>
    <!-- <p class="card-text"> khbfkjgh    </p> -->
  </div>
</div>
<div class="card text-bg-light mb-3" style="max-width: 18rem;">
  <!-- <div class="card-header">Header</div> -->
  <div class="card-body">
    <h1 class="card-title">
  <a href="categoriviewtable.php"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Category</a>
    </h1>
    <!-- <p class="card-text">k of the card's content.</p> -->
  </div>
</div>
</div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
  crossorigin="anonymous"></script>
  </div>
</body>
<script>
    function or(){
        location.replace("orders.php")
    }
</script>
</html>

<?php
 


?>