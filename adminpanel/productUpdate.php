 
<?php
 $conn=mysqli_connect('localhost','root','root','productsitems');
 if (isset($_POST['update'])) {
        $id=$_POST['productid'];
        $name = $_POST["productname"];
        $image=$_POST['productImage'];
        $price = $_POST['price'];
         
        $sql =("UPDATE `productdetails` SET `productid`='$id',
        `productImage`='$name',`productname`='$image',`price`='$price',
         WHERE productid = $id");
        // $result = $conn->query($sql);
        $result=mysqli_query($conn,$sql);
        if ($result == TRUE) {
            echo "updated successfully";
            header('location: productsviwetable.php');
        }else{
            echo "Error:" . $sql . "<br>";
        }

    }

if (isset($_GET['productid'])) {
    $id=$_GET['productid'];
    // $name = $_GET['name'];
    $sql = "select * from productdetails WHERE productid='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // $id=$_POST['productid'];
        // $name = $_POST["productname"];
        // $image=$_POST['productImage'];
        // $price = $_POST['price'];
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productUpdate</title>
</head>
<body> 
        <h2> update</h2>
        <form action="" method="post">
          <fieldset>
            <legend> details</legend>
            product-Name:<br>
            <input type="text" name="productname" value="<?php echo $name; ?>">
            <!-- <input type="hidden" name="id" value="<//?php echo $id; ?>"> -->
            <br>
            ProductImage:<br>
            <input type="file" name="productImage" id=""  value="<?php echo $image; ?>">
            <!-- <input type="text" name="age" value="<//?php echo $age; ?>"> -->
            <br>
            <!-- Email:<br>
            <input type="email" name="email" value="<//?php echo $email; ?>"> -->
            <br>
            Price:<br>
            <input type="number" name="phone" value="<?php echo $phone;?>" ><br>
            <input type="submit" value="Update" name="update">
          </fieldset>
        </form>
        </body>
        </html>


    <?php
    } else{
        header('Location: productsviwetable.php');
    }
}
?>